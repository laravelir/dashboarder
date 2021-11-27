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

if (!function_exists('dashboarder_locale_flag')) {
    function dashboarder_locale_flag()
    {
        switch (config('dashboarder.locales.default')) {
            case 'en':
                return config('dashboarder.locales.en.flag');
                break;
            case 'fa':
                return config('dashboarder.locales.fa.flag');
                break;

            default:
                return config('dashboarder.locales.en.flag');
                break;
        }
    }
}

if (!function_exists('dashboarder_lang')) {
    function dashboarder_lang($key)
    {
        switch (config('dashboarder.locales.default')) {
            case 'en':
                return trans('dashboarder::messages.' . $key, [], 'en');
                break;
            case 'fa':
                return trans('dashboarder::messages.' . $key, [], 'fa');
                break;
            default:
                return trans('dashboarder::messages.' . $key, [], 'en');
                break;
        }
    }
}


if(! function_exists('get_icon')) {
    function get_icon($type){
        $array = [
            'file-text' => ['posts', 'article', 'stories', 'post', 'articles', 'story'],
            'users' => ['users', 'user', 'accounts', 'account', 'admins', 'admin', 'employee', 'employees'],
            'file' => ['files', 'file'],
            'mic' => ['episode', 'episodes', 'voices', 'voice'],
            'book' => ['book', 'books'],
            'tag' => ['tag', 'tags'],
            'bookmark' => ['bookmarks', 'bookmark'],
            'heart' => ['likes', 'like', 'favorite', 'favorites'],
            'music' => ['musics', 'music', 'audios', 'audio'],
            'bell' => ['notifications', 'notification'],
            'layers' => ['request', 'requests'],
            'settings' => ['settings', 'setting'],
            'truck' => ['product', 'products', 'shops', 'shop'],
            'message-circle' => ['comments', 'messages', 'pm', 'comment', 'message', 'chats', 'chat'],
        ];
        foreach ($array as $key => $arrayValues){
            if(in_array($type, $arrayValues)){
                $val = $key;
            }
        }
        return $val ?? 'grid';
    }
}
