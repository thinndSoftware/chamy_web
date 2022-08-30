<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['image_detail', 'image_detail_link', 'product_id'];
}
