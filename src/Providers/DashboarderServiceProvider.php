<?php

namespace Laravelir\Dashboarder\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravelir\Dashboarder\Facades\DashboarderFacade;
use Laravelir\Dashboarder\Console\Commands\InstallPackageCommand;

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

        $this->registerCommands();
        $this->publishConfig();
        $this->registerTranslations();
        $this->registerAssets();
        $this->registerRoutes();
        $this->registerBladeDirectives();
        $this->publishStubs();
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

    private function publishStubs()
    {
        $this->publishes([
            __DIR__ . '/../Console/Stubs' => resource_path('vendor/laravelir/dashboarder/stubs'),
        ], 'dashboarder-stubs');
    }

    private function registerFacades()
    {
        $this->app->bind('dashboarder', function ($app) {
            return new DashboarderFacade();
        });
    }

    private function registerCommands()
    {
        if ($this->app->runningInConsole()) {

            $this->commands([
                InstallPackageCommand::class,
            ]);
        }
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

    protected function publishMigrations()
    {
        if (empty(File::glob(database_path('migrations/*_create_varbox_tables.php')))) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__ . '/../database/migrations/create_varbox_tables.stub' => database_path() . "/migrations/{$timestamp}_create_varbox_tables.php",
            ], 'varbox-migrations');
        }
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('format', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });

        Blade::directive('config', function ($key) {
            return "<?php echo config('dashboarder.' . $key); ?>";
        });
    }
}
