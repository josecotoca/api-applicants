<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithEvents;

class ReadSheetImport implements WithMultipleSheets
{
    public $sheet;
    public function __construct($sheet)
    {
        $this->sheet = $sheet;
    }
    public function sheets(): array
    {
        return [
            $this->sheet => new CollectionImport(),
        ];
    }
}
