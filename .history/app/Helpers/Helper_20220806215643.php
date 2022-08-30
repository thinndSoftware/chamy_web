<?php

use App\Models\Setting;

function getConfigValueFromSettingTable($configKey)
{
    $setting = Setting::where('config_key', $configKey)->fists();
    if (!empty($setting)) {
        return $setting->config_value;
    }
    return null;
}
