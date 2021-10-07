<?php

// config file for laravelir/dashboarder
return [
    'routes' => [
        'prefix' => 'dashboard',
        'middleware' => ['web',],
    ],

    'locales' => [
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
];
