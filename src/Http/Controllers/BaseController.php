<?php

namespace Laravelir\Dashboarder\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as LaravelBaseController;

class BaseController extends LaravelBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
