<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['user_id', 'shipping_id', 'order_total', 'order_status'];
    public function orderDetail(Type $var = null)
    {
        # code...
    }
}
