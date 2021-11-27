<?php

namespace Laravelir\Dashboarder\Http\Controllers;

class AuthController extends BaseController
{
    public function logout()
    {
        auth(config('dashboarder.auth.guard'))->logout();
        return redirect(config('dashboarder.auth.unauthorized_redirect_route'));
    }
}
