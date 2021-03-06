<?php

namespace Laravelir\Dashboarder\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BaseCommand extends Command
{
    protected $signature = 'dashboarder:install';

    protected $description = 'Install the dashboarder Dashboarder';

    public function handle()
    {
        $this->line("\t... Welcome To Dashboarder Installer ...");

        // config file
        if (File::exists(config_path('dashboarder.php'))) {
            $confirm = $this->confirm("dashboarder.php already exist. Do you want to overwrite?");
            if ($confirm) {
                $this->publishConfig();
                $this->info("config overwrite finished");
            } else {
                $this->info("skipped config publish");
            }
        } else {
            $this->publishConfig();
        }

        // assets
        if (File::exists(public_path('dashboarder'))) {
            $confirm = $this->confirm("public/dashboarder directory already exist. Do you want to overwrite?");
            if ($confirm) {
                $this->publishAssets();
                $this->info("assets overwrite finished");
            } else {
                $this->error("you must publish assets");
                die;
            }
        } else {
            $this->publishAssets();
        }


        $this->info("Dashboarder Successfully Installed.\n");
        $this->info("\t\tGood Luck.");
    }

    private function publishConfig()
    {
        $this->call('vendor:publish', [
            '--provider' => "Laravelir\Dashboarder\Providers\DashboarderServiceProvider",
            '--tag'      => 'dashboarder-config',
            '--force'    => true
        ]);
    }

    private function publishAssets()
    {
        $this->call('vendor:publish', [
            '--provider' => "Laravelir\Dashboarder\Providers\DashboarderServiceProvider",
            '--tag'      => 'dashboarder-assets',
            '--force'    => true
        ]);
    }


    //     //migration
    //     if (File::exists(database_path("migrations/$migrationFile"))) {
    //         $confirm = $this->confirm("migration file already exist. Do you want to overwrite?");
    //         if ($confirm) {
    //             $this->publishMigration();
    //             $this->info("migration overwrite finished");
    //         } else {
    //             $this->info("skipped migration publish");
    //         }
    //     } else {
    //         $this->publishMigration();
    //         $this->info("migration published");
    //     }

    //     $this->call('migrate');
    // }

    // private function publishMigration()
    // {
    //     $this->call('vendor:publish', [
    //         '--provider' => "Laravelir\Dashboarder\Providers\DashboarderServiceProvider",
    //         '--tag'      => 'migrations',
    //         '--force'    => true
    //     ]);
    // }
}
