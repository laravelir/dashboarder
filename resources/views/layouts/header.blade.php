<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Copyright 2021-2021 laravelir/dashboarder Miladimos
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->

@dd(dashboarder_lang('search', 'fa'))
<html lang="{{ dashboarder_locale() }}" dir="{{ dashboarder_dir() }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Powered By" content="Laravelir - http://github.com/laravelir">

    <title>{{ config('dashboarder.seo.prefix_title') }} {{ config('dashboarder.seo.title_separator') }}
        @yield('page_title') </title>

    <!-- Start CSS files -->
    @include('dashboarder::partials.template-styles')
    <!-- End CSS files -->

</head>
