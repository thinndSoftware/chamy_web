<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'insurances';
    protected $fillable = ['name' ,'phone' ,'address' ,'order_id' ,'product_id' ,'status' ,'note', 'product_name'];

}
