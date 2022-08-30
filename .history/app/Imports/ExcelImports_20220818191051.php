<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImports implements ToModel, WithHeadingRow,
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row['name'],
            'category_id' => $row['category_id'],
            'content' => $row['content'],
            'price' => $row['price'],
            'discount' => $row['discount'],
            'product_avatar' => $row['product_avatar'],
            'product_vartar_path' => $row['product_vartar_path']
        ]);
    }
}
