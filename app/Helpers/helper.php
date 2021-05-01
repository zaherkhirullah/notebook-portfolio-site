<?php

use Illuminate\Support\Facades\File;

if (!function_exists('version')) {
    function version($file)
    {
        return File::exists($file) ? File::lastModified($file) : '1.0.0';
    }
}

if (!function_exists('asset_v')) {
    function asset_v($path)
    {
        $url = asset($path);
        $version = version(public_path($path));

        return "{$url}?v={$version}";
    }
}