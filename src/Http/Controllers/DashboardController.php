<?php

namespace Laravelir\Dashboarder\Http\Controllers;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        return view('dashboarder::dashboard');
    }
}
