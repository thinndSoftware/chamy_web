<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct(User $user)
    {
        $this->$user = $user;
    }
    public function index()
    {

    }
}
