<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[],
            'category_id' => $row[],
            'content' => $row[],
            'price' => $row[],
            'discount' => $row[],
            'product_avatar' => $row[],
            'product_vartar_path' => $row[]
        ]);
    }
}
