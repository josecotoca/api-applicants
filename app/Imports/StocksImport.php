<?php

namespace App\Imports;

use App\Models\Stock;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class StocksImport implements ToModel,WithCalculatedFormulas, WithHeadingRow
{
    use Importable;
    public $data;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // if (!is_null($row['producto']) && $row['producto'] != '') {
        //     $this->data[] = [
        //         'tm' => isset($row['tm']) ? $row['tm'] : 0,
        //         'product_name' => $row['producto'],
        //     ];
        //     dd($this->data);
        //     return new Stock([
        //         'tm' => isset($row['tm']) ? $row['tm'] : 0,
        //         'form_id' => $this->form_id,
        //         'product_name' => $row['producto'],
        //     ]);
        // }
    }
}
