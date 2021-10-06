<?php

namespace Miladimos\Package\Providers;

use Illuminate\Support\ServiceProvider;
use Miladimos\Package\Console\Commands\InstallPackageCommand;
use Miladimos\Package\Facades\PackageFacade;

class PackageServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/config.php", 'package');

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
        $this->app->bind('package', function ($app) {
            return new PackageFacade();
        });
    }

    private function registerPublishes()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('package.php')
        ], 'package-config');
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
            __DIR__ . '/../../config/package.php' => config_path('package.php')
        ], 'package-config');
    }
}
