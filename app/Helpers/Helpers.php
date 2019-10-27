<?php

use Illuminate\Support\Facades\DB;


class Helpers {

    static function setting($key, $default = null)
    {
        $setting = DB::table('settings')->where('key', $key)->first();
        return $setting->display_name;
    }
}
