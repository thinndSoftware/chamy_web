<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminSettingController extends Controller
{
    private $settings;
    /**
     * Class constructor.
     */
    public function __construct(Setting $settings)
    {
        $this->settings = $settings;
    }
    public function index()
    {
        $settings = $this->settings->latest()->first()->paginate(5);
        return view('admin.settings.setting', compact('settings'));
    }

    function create()
    {
        return view('admin.settings.create');
    }
    public function store(AddSettingRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->settings->create([
                'config_key' => $request->config_key,
                'config_value' => $request->config_value,
                'type' => $request->type
            ]);
            DB::commit();
            return redirect()->route('settings.setting');
        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :". $exception->getMessage()."Line: ".$exception->getLine());
        }

    }
    public function edit($id)
    {
        $settings = $this->settings->find($id);
        return view('admin.settings.edit', compact('settings'));
    }
    public function update($id,SettingUpdateRequest $request)
    {
        try {
            DB::beginTransaction();
            $this->settings->find($id)->update([
                'config_key' => $request->config_key,
                'config_value' => $request->config_value,
            ]);
            DB::commit();
            return redirect()->route('settings.setting');

        } catch (Exception $exception) {
            DB::rollBack();
            Log::error("Message :". $exception->getMessage()."Line:".$exception->getLine() );
        }
    }
    public function delete($id)
    {
            $this->settings->find($id)->delete();
        // try {
        //     DB::beginTransaction();
        //     DB::commit();
        //     return response()->json([
        //         'code'=>200,
        //         'message'=>'sucsset'
        //     ],200);
        // } catch (Exception $exception) {
        //     DB::rollBack();
        //     Log::error("Message: " . $exception->getMessage() . "Line: ".$exception->getLine());
        //     return response()->json([
        //         'code'=>500,
        //         'message'=>'failed'
        //     ],500);
        // }
    }
}
