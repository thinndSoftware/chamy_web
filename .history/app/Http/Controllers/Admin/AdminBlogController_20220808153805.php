<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Class constructor.
     */
    private $blogs;
    public function __construct(Blog $blog)
    {
        $this->blogs = $blog;
    }
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
        $blogs = $this->blogs->create([
            'name' => $request->name
        ])
    }
}
