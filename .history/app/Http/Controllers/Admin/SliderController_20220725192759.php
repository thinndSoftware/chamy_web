<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderAddRequest;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliders;
    use App\Traits\StorageImageTrait;
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
        ]
        $dataImages = $this->storagetraitsUpload($request, 'image_link','sliders')
    }
}
