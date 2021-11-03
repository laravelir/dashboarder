<?php

namespace Laravelir\Dashboarder\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Laravelir\Dashboarder\Traits\StubsHelper;

class InstallPackageCommand extends Command
{
    use StubsHelper;

    protected $signature = 'dashboarder:install';

    protected $description = 'Install the dashboarder Dashboarder';

    private $file;

    public function __construct(File $file)
    {
        parent::__construct();

        $this->file = $file;
    }

    public function handle()
    {
        $this->line("\t... Welcome To Dashboarder Installer ...");

        $this->appendEnvs();

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

        $this->publishStubs();




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


    private function appendEnvs()
    {

        if (!File::exists(base_path('.env'))) {
            $this->error(".env file does't exists! create it and rerun.");
            die;
        }

        $envs = $this->getStub('envs');

        $envFileHandle = fopen(base_path('.env'), 'r+');
        if ($envFileHandle === false) {
            die("can't read .env file.");
        }

        if (!file_put_contents(base_path('.env'), $envs, FILE_APPEND)) {
            $this->error("can't append envs to .env file");
            die;
        }

        $this->info('Dashboarder envs appended to .env file');
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
    //         '--tag'      => 'dashbaorder-migrations',
    //         '--force'    => true
    //     ]);
    // }

    private function publishStubs()
    {
        $this->call('vendor:publish', [
            '--provider' => "Laravelir\Dashboarder\Providers\DashboarderServiceProvider",
            '--tag'      => 'dashboarder-stubs',
            '--force'    => true
        ]);
    }
}
