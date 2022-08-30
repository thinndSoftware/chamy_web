<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use
Maatwebsite\Excel\Concerns\WithMultipleSheets  ;

class ImportarExcel implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
