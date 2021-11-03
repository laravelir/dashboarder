<?php

namespace Laravelir\Dashboarder\Console\Commands\Makes;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeCrudCommand extends Command
{
    protected $signature = 'dashboarder:make:crud';

    protected $description = 'make a dashboarder crud';

    private $file;

    private $crudName;


    public function __construct(File $file)
    {
        parent::__construct();

        $this->file = $file;
    }

    public function handle()
    {
        $this->line("\t... Welcome To Dashboarder ...");

        // config file
        if ($this->file->exists(config_path('dashboarder.php'))) {
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

        $this->info("Dashboarder Successfully Installed.\n");
        $this->info("\t\tGood Luck.");
    }
}
