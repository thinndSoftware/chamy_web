<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DoneOrderMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function send_order()
    {
        $user = User::find(1);
        $mailable = new DoneOrderMail($user);
        Mail::to('namphieu123@gmail.com')->send($mailable);
        return true;
    }
}
