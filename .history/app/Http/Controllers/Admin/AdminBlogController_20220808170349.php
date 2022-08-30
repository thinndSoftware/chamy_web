<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\Models\Blog;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
        $blogs = $this->blogs->paginate(5);
        return view('admin.blogs.blog',compact('blogs'));
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
            DB::rollback();
            Log::error("Message :" . $exception->getMessage() ."Line: " . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $blog = $this->blogs->find($id);
        return view('admin.blogs.edit',compact('blog'));
    }
    public function update($id, EditBlogRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataUpdate = [
                'name' => $request->name,
                'content' => $request->content,
            ];
            $dataUploadFile = $this->storagetraitsUpload($request, 'image_link', 'blog');
            if (!empty($dataUploadFile)) {
                $dataInssert['image_name'] = $dataUploadFile['file_name'];
                $dataInssert['image_path'] = $dataUploadFile['file_path'];
            }
            $this->blogs->find($id)->update($dataInssert);
            DB::commit();
            return redirect()->route('blogs.blog');
        } catch (Exception $exception) {
            Log::error("message:" . $exception->getMessage() .'line: ' . $exception->getLine);
        }
    }
    public function delete($id)
    {
        $this->blogs->find($id)->delete();
        return response()->json([
            'code':200,
        ])
    }
}
