<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\StorageImageTrait;

class CategoryController extends Controller
{
    protected $htmlSelect;
    protected $category;
    use StorageImageTrait;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        // dd($this->category->exists());
        if ($this->category->exists()) {
            $categories = $this->category->latest()->first()->paginate(5);
            return view('admin.category.category', compact('categories'));
        } else {
            return redirect()->route('category.create');
        }
        /*
            latest() sắp xếp kết quả trả về theo ngày theo cột created_at
            paginate() trả về bao nhiêu giá trị theo thơi gian mới nhất->cũ nhất
        */
    }

    public function create()
    {
        $htmlOptions = $this->getCategory($parent_id = null);

        return view('admin.category.create', compact('htmlOptions'));
    }

    public function edit($id)
    {
        $categories = $this->category->find($id);
        $htmlOptions = $this->getCategory($categories->parent_id);
        /* $categories = $this->category->all()->where('category_id',$id);
        *dd($categories[0]->category_name);
         */
        return view('admin.category.edit', compact('categories', 'htmlOptions'));
    }

    public function update($id, Request $request)
    {

        $categories = $this->category->find($id)->update([
            'category_name' => $request->category_name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name, '-')
        ]);
        return redirect()->route('category.category');
    }

    public function delete($id)
    {
        $categories = $this->category->find($id)->delete();
        return redirect()->route('category.category');
    }

    public function store(Request $request)
    {
        $dataInsert = [
            'category_name' => $request->category_name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->category_name, '-')
        ];
        $dataImages = $this->storagetraitsUpload($request, 'image_link', 'category');
        dd($request->file('image_link'));
        if (!empty($dataImages)) {
            $dataInsert['image_name'] = $dataImages['file_name'];
            $dataInsert['image_path'] = $dataImages['file_path'];
        }
        $this->category->create($dataInsert);
        return redirect()->route('category.create');
    }

    public function getCategory($parent_id)
    {
        $data = $this->category->all();
        $htmlOptions = (new Recusive($data))->categoryRecursive($parent_id);
        return $htmlOptions;
    }
}
