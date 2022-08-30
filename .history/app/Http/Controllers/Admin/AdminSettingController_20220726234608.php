<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;


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
        $this->settings->create([
            'config_key'=> $request->config_key,
            'config_value'=> $request->config_value,
            'type'=> $request->type
        ]);
        return redirect()->route('settings.setting');
    }
    public function edit($id)
    {
        $settings = $this->settings->find($id);
        return view('admin.settings.edit', compact('settings'));
    }
    public function update(SettingUpdateRequest $request)
    {
        $this->settings->update([
            'config_key'=> $request->config_key,
            'config_value'=> $request->config_value,
            'type'=>$request->type
        ]);
        // return redirect()->route()
    }
}
