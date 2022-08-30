<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'content',
        'price',
        'image_link_name',
        'image_link_path',
        'image_list_name',
        'image_list_path'
    ];
}
