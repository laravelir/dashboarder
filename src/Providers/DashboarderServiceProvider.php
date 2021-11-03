<?php

namespace Laravelir\Dashboarder\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravelir\Dashboarder\Console\Commands\InstallPackageCommand;
use Laravelir\Dashboarder\Facades\DashboarderFacade;

class DashboarderServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/dashboarder.php", 'dashboarder');

        // $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $this->registerViews();

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
            $this->publishConfig();
            $this->registerTranslations();
            $this->registerAssets();
        }

        $this->registerRoutes();
    }

    private function registerViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboarder');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/laravelir/dashboarder'),
        ]);
    }

    private function registerAssets()
    {
        $this->publishes([
            __DIR__ . '/../../resources/statics' => public_path('dashboarder'),
        ], 'dashboarder-assets');
    }

    private function registerFacades()
    {
        $this->app->bind('dashboarder', function ($app) {
            return new DashboarderFacade();
        });
    }

    private function registerCommands()
    {
        $this->commands([
            InstallPackageCommand::class,
        ]);
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/dashboarder.php' => config_path('dashboarder.php')
        ], 'dashboarder-config');
    }

    private function registerTranslations()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'dashboarder');

        $this->publishes([
            __DIR__ . '/../../resources/lang' => resource_path('lang/laravelir/dashboarder'),
        ], 'dashboarder-langs');
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../../routes/dashboarder.php', 'dashboarder-routes');
        });
    }

    private function routeConfiguration()
    {
        return [
            'prefix' => config('dashboarder.routes.prefix'),
            'middleware' => config('dashboarder.routes.middleware'),
            'as' => 'dashboarder.'
        ];
    }
}
