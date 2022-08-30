<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
