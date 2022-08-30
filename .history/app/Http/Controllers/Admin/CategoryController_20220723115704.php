<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $htmlSelect;
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        dd($this->category->first());
        if($this->category){
            return redirect()->route('category.create');
        }else{
            $categories = $this->category->latest()->first()->paginate(5);
            return view('admin.category.category', compact('categories'));
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
        $this->category->create(
            [
                'category_name' => $request->category_name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->category_name, '-')
            ]
        );
        return redirect()->route('category.create');
    }

    public function getCategory($parent_id)
    {
        $data = $this->category->all();
        $htmlOptions = (new Recusive($data))->categoryRecursive($parent_id);
        return $htmlOptions;
    }
}
