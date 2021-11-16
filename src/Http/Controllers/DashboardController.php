<?php

namespace Laravelir\Dashboarder\Http\Controllers;

use Illuminate\Support\Facades\Config;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        config(['dashboarder.locales.default'=> 'en']);
        return view('dashboarder::dashboard');
    }
}
