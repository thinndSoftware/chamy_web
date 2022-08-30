<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DoneOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user , $order_id;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id)
    {

        // $this->user = $user;
        $this->order_id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order_by_id = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('shipping', 'orders.shipping_id', '=', 'shipping.shipping_id')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->select('orders.*', 'users.*', 'shipping.*', 'order_details.*')->first();
        $product_order = DB::table('order_details')->where('order_id', $this->order_id)->get();
        $user = DB::table('users')->find($order_by_id->user_id);
        // dd($order_by_id->name);
        $dateNow = Carbon::now('Asia/Ho_Chi_Minh');
        return $this
            ->subject('Hóa đơn xác nhận đặt hàng')
            ->view('admin.print.bill',compact('order_by_id', 'user', 'product_order'));
            // ->view('admin.print.bill',compact('order_by_id '))
            // ->with([
            //     'user' => $this->user,
            // ]);
    }
}
