<?php

namespace Laravelir\Dashboarder\Providers;

use Illuminate\Support\ServiceProvider;
use Laravelir\Dashboarder\Console\Commands\InstallDashboarderCommand;
use Laravelir\Dashboarder\Facades\DashboarderFacade;

class DashboarderServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/dashboarder.php", 'dashboarder');

        $this->registerFacades();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->registerCommands();
            $this->registerPublishes();
            $this->publishConfig();
        }
    }

    private function registerFacades()
    {
        $this->app->bind('dashboarder', function ($app) {
            return new DashboarderFacade();
        });
    }

    private function registerPublishes()
    {
        $this->publishes([
            __DIR__ . '/../../config/dashboarder.php' => config_path('dashboarder.php')
        ], 'dashboarder-config');
    }

    private function registerCommands()
    {
        $this->commands([
            InstallDashboarderCommand::class,
        ]);
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/dashboarder.php' => config_path('dashboarder.php')
        ], 'dashboarder-config');
    }
}
