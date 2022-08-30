<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Models\Blog;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Class constructor.
     */
    private $blogs;
    use StorageImageTrait;
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
        try {
            DB::beginTransaction();
            $dataInssert = [
                'name' => $request->name,
                'content' => $request->content,
            ];
            $dataUploadFile = $this->storagetraitsUpload($request, 'image_link', 'blog');
            if (!empty($dataUploadFile)) {
                $dataInssert['image_name'] = $dataUploadFile['file_name'];
                $dataInssert['image_path'] = $dataUploadFile['file_path'];
            }
            $this->blogs->create($dataInssert);
            DB::commit();
            return redirect()->route('blogs.create');
        } catch (Exception $exception) {

        }

    }
}
