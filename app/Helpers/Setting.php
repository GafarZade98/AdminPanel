<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    function setting($key = 'title')
    {
        return Setting::where('key',$key)->first()->value;
    }
}

