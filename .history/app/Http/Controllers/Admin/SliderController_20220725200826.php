<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderAddRequest;
use App\Models\Slider;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SliderController extends Controller
{
    protected $sliders;
    use StorageImageTrait;
    public function __construct(Slider $sliders)
    {
        $this->sliders= $sliders;
    }

    public function index()
    {
        $sliders = $this->sliders->paginate(5);
        dd($sliders);
        return view('admin.sliders.slider',compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(SliderAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataInsert = [
                'name' => $request->name,
                'description' => $request->description,
            ];
            $dataImages = $this->storagetraitsUpload($request, 'image_link', 'sliders');
            if (!empty($dataImages)) {
                $dataInsert['image_name'] = $dataImages['file_name'];
                $dataInsert['image_path'] = $dataImages['file_path'];
            }
            $this->sliders->create($dataInsert);
            DB::commit();
            return back();
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :". $exception->getMessage()."Line: ".$exception->getLine() );
        }

    }
}
