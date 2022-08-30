<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class DoneOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order_by_id  = 12;
        $dateNow = Carbon::now('Asia/Ho_Chi_Minh');
        return $this
            ->subject('Hóa đơn xác nhận đặt hàng')
            ->view('admin.mail.done_order',compact('dateNow','order_by_id'))
            // ->view('admin.print.bill',compact('order_by_id '))
            ->with([
                'user' => $this->user,
            ]);
    }
}
