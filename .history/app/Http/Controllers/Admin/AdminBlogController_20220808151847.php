<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {
        return view('admin.blogs.blog');
    }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function store(AddBlogRequest $request)
    {
        dd($request);
    }
}
