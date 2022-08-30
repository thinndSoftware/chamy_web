<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\StorageImageTrait;
class ProductController extends Controller
{
    private $products;
    use StorageImageTrait;
    public function __construct(Product $product)
    {
        $this->products = $product;
    }
    public function index()
    {

        return view('admin.products.product');
    }
    public function create()
    {
        $category = new Category;
        $category = new CategoryController($category);
        $htmloptions = $category->getCategory('');

        return view('admin.products.create', compact('htmloptions'));
    }

    public function store(Request $request)
    {
        $dataProductCreate = [
            'name'=>$request->menus_name,
            'category_id'=>$request->parent_id,
            'content'=>$request->description,
            'price'=>$request->discount,
        ];
        $dataUploadImage_link = $this->storagetraitsUpload($request,'image_link','product');
        if(!empty($data)){
            $dataProductCreate['image_link_name'] = $dataUploadImage_link['file_name'];
            $dataProductCreate['image_link_path'] = $dataUploadImage_link['file_path'];
        }
        if($request->hasFile('image_list')){
            foreach($request->file('image_list') as $fileItems){
                $dataProductImageList = $this->storagetraitsUploadMutiple($fileItems,'product');
                $dataProductCreate['image_list_name'] = $dataProductImageList['file_name'];
                $dataProductCreate['image_list_path'] = $dataProductImageList['file_path'];
                dd($dataProductCreate);
                $this->products->create($dataProductCreate);
            }
        }
    }
}
