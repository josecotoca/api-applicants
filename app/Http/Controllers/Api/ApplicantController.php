<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ApiResource;
use App\Http\Resources\Api\ApiErrorResource;
use App\Contracts\ApplicantRepositoryInterface;
use App\Http\Requests\Api\ApplicantCreateRequest;
use App\Models\User;

class ApplicantController extends Controller
{
    // private $applicantRepository;

    // public function __construct(ApplicantRepositoryInterface $applicantRepository)
    // {
    //     $this->applicantRepository = $applicantRepository;
    // }

    // protected function loadDataCreate($data)
    // {
    //     $user = auth()->user();
    //     return new Applicant([
    //         'name' =>  $data->name,
    //         'source' => $data->source,
    //         'owner' => $data->owner,
    //         'created_by' => $user->id
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(ApplicantCreateRequest $request)
    // {
    //     try {
    //         DB::beginTransaction();

    //         $data = $this->loadDataCreate($request);
    //         $applicant = $this->applicantRepository->save($data);

    //         if (is_null($applicant) || is_null($applicant->id)) {
    //             throw new Exception('Ha ocurrido un error al crear candidato');
    //         }
    //         DB::commit();
    //         return (new ApiResource($applicant, 201));
    //     } catch (Exception $ex) {
    //         DB::rollback();
    //         return (new ApiErrorResource($ex->getMessage(), 500));
    //     }
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(int $id)
    // {
    //     try {
    //         $applicant = $this->applicantRepository->get($id);

    //         if (is_null($applicant) || is_null($applicant->id)) {
    //             return (new ApiErrorResource('No lead found', 404));
    //         }

    //         return (new ApiResource($applicant));
    //     } catch (Exception $ex) {
    //         return (new ApiErrorResource($ex->getMessage(), 500));
    //     }
    // }

    // /**
    //  * Display leads.
    //  */
    // public function showLeads()
    // {
    //         $user = auth()->user();
    //         if($user->hasRole([User::ROLE_MANAGER]))
    //             return $this->showAll();

    //         if ($user->hasRole([User::ROLE_AGENT]))
    //             return $this->showByOwner();
    // }

    // /**
    //  * Display by owner.
    //  */
    // protected function showByOwner()
    // {
    //     try {
    //         $user = auth()->user();
    //         $applicants = $this->applicantRepository->getApplicantsByOwner($user->id);

    //         return (new ApiResource($applicants));
    //     } catch (Exception $ex) {
    //         return (new ApiErrorResource($ex->getMessage(), 500));
    //     }
    // }

    // /**
    //  * Display Alls.
    //  */
    // protected function showAll()
    // {
    //     try {
    //         $applicants = $this->applicantRepository->all();

    //         return (new ApiResource($applicants));
    //     } catch (Exception $ex) {
    //         return (new ApiErrorResource($ex->getMessage(), 500));
    //     }
    // }

}
