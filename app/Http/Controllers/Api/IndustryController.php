<?php

namespace App\Http\Controllers\Api;

use Exception;
use Carbon\Carbon;
use App\Models\Form;
use App\Models\User;
use App\Models\Option;
use App\Models\Period;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\IndustryUser;
use Illuminate\Http\Request;
use App\Imports\StocksImport;
use App\Imports\CollectionImport;
use App\Imports\ExecutedHsImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Api\FileRequest;
use App\Http\Resources\Api\ApiResource;
use App\Imports\StocksCollectionImport;
use App\Http\Resources\Api\ApiErrorResource;
use App\Imports\ReadSheetImport;

class IndustryController extends Controller
{
    /**
     * Ver configuracion de formularios
     * @OA\Get(
     * path="/api/industry/settings",
     * summary="configuracion para formularios",
     * tags={"industry"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     * @OA\MediaType(
     * mediaType="application/json"
     * )),
     * @OA\Response(
     * response=200,
     * description="confgiruacion",
     * @OA\JsonContent()
     * ),
     * )
     */
    public function settings(Request $request)
    {
        $auth_user = auth()->user();
        $data = [];
        $data['products'] = $this->getProducts();
        $data['period'] = $this->getPeriodActive();
        $data['industry'] = $this->getIndustry();
        $data['options'] = $this->getIndustryOptions($data['industry']->id);

        return (new ApiResource($data));
    }

    public function importStockXls($file, $form_id)
    {
        try {
            Excel::import(new StocksImport($form_id), $file);
            return true;
            //(new StocksImport)->import($file, null, $this->excel::XLSX);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            return false;
        }
    }


    public function getProducts()
    {
        $products = Product::all();
        return $products;
    }



    public function readCollectionFromXls($file)
    {
        $data = Excel::toCollection(new CollectionImport, $file)[0];
        return $data;
    }

    public function saveFile(){

    }

    /**
     * Importar Excel
     * @OA\Post (
     *     path="/api/industry/import-xls",
     *     tags={"industry"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 allOf={
     *                     @OA\Schema(
     *                         @OA\Property(
     *                             description="Archivo Excel",
     *                             property="file",
     *                             type="string", format="binary"
     *                         )
     *                     )
     *                 }
     *             )
     *         )
     *     ),
     *     security={{"bearer_token":{}}},
     *      @OA\Response(
     *          response=200,
     *          description="Import successfull",
     *          @OA\JsonContent()
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable content",
     *          @OA\JsonContent()
     *      )
     * )
     */
    public function importXls(FileRequest $request)
    {
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 200000);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filenameOrigin = $file->getClientOriginalName();

            $filenameOrigin = Str::random(5) . '_' . $filenameOrigin;
            $industry = $this->getIndustry();
            //$path = app()->basePath('files/' . trim($industry->name));
            //$file->move($path, $filenameOrigin);
            ////////
            $path = 'files/' . trim($industry->name);
            $file->storeAs($path, $filenameOrigin);
            $path_file = storage_path('app/' . $path . '/' . $filenameOrigin);
            ////////
            $file_name = $path . '/' . $filenameOrigin;
            //$collection = $this->readCollectionFromXls($file);
            $info = $this->getInfoFile($path_file);
            //$info = $this->readCollectionFromXls($file);

            return (new ApiResource(['file' => $file_name, 'info' => $info]));
        } else
            return (new ApiErrorResource('Error al intentar leer el excel, verificar formato', 500));
    }

    public function getInfoFile($file)
    {
        $fileExtension     = pathinfo($file, PATHINFO_EXTENSION);
        $temporaryFileFactory = new \Maatwebsite\Excel\Files\TemporaryFileFactory(
            config(
                'excel.temporary_files.local_path',
                config(
                    'excel.exports.temp_path',
                    storage_path('framework/laravel-excel')
                )
            ),
            config('excel.temporary_files.remote_disk')
        );


        $temporaryFile = $temporaryFileFactory->make($fileExtension);
        $currentFile = $temporaryFile->copyFrom($file, null);
        $reader = \Maatwebsite\Excel\Factories\ReaderFactory::make(null, $currentFile);
        $info = $reader->listWorksheetInfo($currentFile->getLocalPath());
        $totalRows = 0;
        $data = [];
        foreach ($info as $sheet) {
            $totalRows += $sheet['totalRows'];
            $data[] = $sheet;
        }
        $currentFile->delete();
        return $data;
    }

    /**
     * Guardar formulario Acopio
     * @OA\Post (
     *     path="/api/industry/save-acopio",
     *     tags={"industry"},
     *     security={{"bearer_token":{}}},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="period_id",
     *                          type="integer"
     *                      ),
     *                      @OA\Property(
     *                          property="name_file",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="worksheet",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "period_id":"1",
     *                     "name_file":"file.xls",
     *                     "worksheet":"GRANO ACOPIADO"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="formulario guardado",
     *          @OA\JsonContent()
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Unprocessable content",
     *          @OA\JsonContent()
     *      )
     * )
     */
    public function saveAcopio(Request $request)
    {
        $file = storage_path('app/' . $request->name_file);

        //
        if($request->hasFile('stocks')) {
                        $file = $request->file('stocks');
                        $entry = new Form();
                        // $entry->date_reception',
                        // $entry->date_close',
                        // $entry->batch',
                        // 'option_id',
                        // 'industry_id',
                        // 'period_id',
                        // 'product_id',
                        // 'status',
                        $entry->save();
        }
        //

        $execute = new ReadSheetImport($request->worksheet);
        $data = Excel::toCollection( $execute, $file);
        $data_ = [];
        foreach ($data as $value) {
            foreach ($value as $item) {
                $data_[] = (empty($item['fecha_de_recepcion'])) ? null : Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($item['fecha_de_recepcion']))->format('Y-m-d');
            }
        }

        return $data;
    }
}
