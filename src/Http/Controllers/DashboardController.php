<?php

namespace Laravelir\Dashboarder\Http\Controllers;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        // config(['dashboarder.locales.default'=> 'en']);
        return view('dashboarder::dashboard');
    }
}
