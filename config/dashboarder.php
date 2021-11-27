<?php

// config file for laravelir/dashboarder
return [
    'routes' => [
        'prefix' => 'dashboarder',
        'middleware' => ['web',],
    ],

    'namespaces' => [
        /**
         * Application Namespace
         * app()->getNamespace()
         */
        'application_namespace' => 'App',

        /**
         *  Path that contains Models
         *
         *  application_namespace + \ + models ==> App\Models
         */
        'models' => 'Models',

        /**
         *  Path that contains Controllers
         *
         *  application_namespace + \ + controllers ==> App\Http\Controllers
         */
        'controllers' => 'Http\Controllers',

        /**
         *  Path that contains Http Requests
         *
         *  application_namespace + \ + requests ==> App\Http\Requests
         */
        'requests' => 'Http\Requests',

        /**
         *  Path that contains created dashboarder views
         *
         *  resource_path() + \ + views + \ + dashboarder_views ==> resources\views\dashboarder
         */
        'dashboarder_views' => 'dashboarder',
    ],

    'auth' => [
        'guard' => config('auth.defaults.guard') ?? 'web',

        /**
         * Unauthorized user redirected to below route name
         * you must enter route name
         */
        'unauthorized_redirect_route' => 'auth.login',
    ],

    'locales' => [
        'default' => 'fa',

        'en' => [
            'title' => 'English',
            'flag' => '',
            'dir' => 'ltr',
        ],
        'fa' => [
            'title' => 'فارسی',
            'flag' => '',
            'dir' => 'rtl',
        ],
    ],

    'theme' => [
        'primary_color' => '',
        'secondary_color' => '',


        'footer_links' => [
            ['title' => 'LARAVEL', 'link' => 'https://laravel.com/'],
            ['title' => 'CREATIVE TIM', 'link' => 'https://www.creative-tim.com/'],
        ],
    ],

    'seo' => [
        'prefix_title' => 'Dashboarder',

        /**
         * prefix_title + title_separator + page_title
         * separators: | -
         *
         */
        'title_separator' => '-',

        /**
         * index dashboard routes in search engines
         */
        'indexed_site' => false,
    ],

    'default_pagination' => 8,
];
