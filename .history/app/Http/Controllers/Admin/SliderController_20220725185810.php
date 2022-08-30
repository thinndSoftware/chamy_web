<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderAddRequest;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Class constructor.
     */
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

    }
}
