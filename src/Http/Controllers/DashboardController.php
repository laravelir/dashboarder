<?php

namespace Laravelir\Dashboarder\Http\Controllers;

class DashboardController extends BaseController
{
    public function dashboard()
    {
        dashboarder_asset("/statics/css/demo.css");
        return view('dashboarder::dashboard');
    }
}
