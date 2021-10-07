<?php

if (!function_exists('dashboarder_path')) {
    function dashboarder_path($path = null)
    {
        return realpath(__DIR__ . '../../../' . trim($path));
    }
}

if (!function_exists('dashboarder_asset')) {
    function dashboarder_asset($asset)
    {
        return asset('dashboarder' . trim($asset));
    }
}
