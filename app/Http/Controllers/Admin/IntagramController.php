<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderAddRequest;
use App\Models\Slider;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;


class IntagramController extends Controller
{
    private $sliders;
    use StorageImageTrait;
    public function __construct(Slider $sliders)
    {
        $this->sliders = $sliders;
    }

    public function index()
    {
        $sliders = $this->sliders->paginate(5);
        return view('admin.intagram.list', compact('sliders'));
    }

}
