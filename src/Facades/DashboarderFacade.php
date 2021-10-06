<?php

namespace Laravelir\Dashboarder\Facades;

use Illuminate\Support\Facades\Facade;

class DashboarderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dashboarder'; // TODO: Change the accessor name
    }
}
