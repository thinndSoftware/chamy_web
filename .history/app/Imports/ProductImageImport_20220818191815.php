<?php

namespace App\Imports;

use App\Models\ProductImage;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImageImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProductImage([
            //
        ]);
    }
}
