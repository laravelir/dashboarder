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

if (!function_exists('dashboarder_locale')) {
    function dashboarder_locale()
    {
        return config('dashboarder.locales.default');
    }
}

if (!function_exists('dashboarder_dir')) {
    function dashboarder_dir()
    {
        switch (config('dashboarder.locales.default')) {
            case 'en':
                return 'ltr';
                break;
            case 'fa':
                return 'rtl';
                break;

            default:
                return 'ltr';
                break;
        }
    }
}
