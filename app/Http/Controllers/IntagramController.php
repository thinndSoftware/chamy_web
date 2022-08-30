<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntagramController extends Controller
{
 public function index(){
    return view('intagrams.list');
 }
}
