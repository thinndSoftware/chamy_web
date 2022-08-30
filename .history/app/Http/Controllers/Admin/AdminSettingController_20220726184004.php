<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

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
        return view('admin.settings.setting');
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
        ]);
        return redirect()->route('settings.setting');
    }
}
