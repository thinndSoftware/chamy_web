<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderAddRequest;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliders;
    use StorageImageTrait;
    public function __construct(Sliders $sliders)
    {
        $this->sliders= $sliders;
    }

    public function index()
    {
        return view('admin.sliders.slider');
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(SliderAddRequest $request)
    {
        $dataInsert = [
            'name' => $request->name,
            'description'=> $request->description,
        ];
        $dataImages = $this->storagetraitsUpload($request, 'image_link','sliders');
        if(!empty($dataImages)){
            $dataInsert['image_name'] = $dataImages['file_name'];
            $dataInsert['image_path'] = $dataImages['file_path'];
        }
    }
}
