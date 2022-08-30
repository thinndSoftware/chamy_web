<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneOrder extends Model
{
    use HasFactory;
    protected $table = 'done_orders';
    protected $fillable = ['order_id', 'user_id', 'shipping_id', 'order_total', 'order_status'];
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class,);
    }
}
