<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ExcelImports implements ToModel, WithMultipleSheets
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'category_id' => $row[1],
            'content' => $row[2],
            'price' => $row[3],
            'discount' => $row[4],
            'product_avatar' => $row[5],
            'product_vartar_path' => $row[6]
        ]);
    }
    public function sheets()
    {
        return [
            0 => new FirstSheetImport(),
            1 => new SecondSheetImport(),
        ];
    }
}
