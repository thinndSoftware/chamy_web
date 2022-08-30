<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ImportarExcel implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0 => new ExcelImports(),
            1 => new ProductImageImport(),
        ];
    }
}
