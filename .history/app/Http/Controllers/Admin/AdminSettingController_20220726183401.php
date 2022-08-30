<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddSettingRequest;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    private $settings;
    /**
     * Class constructor.
     */
    public function __construct(Settings $settings)
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
        $
    }
}
