<?php

namespace Laravelir\Dashboarder\Console\Commands\Makes;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Laravelir\Dashboarder\Services\CodeBuilder;

class MakeCrudCommand extends Command
{
    protected $signature = 'dashboarder:make:crud
                           {name: The name of Crud}
                           {--table: The name of table}';

    protected $description = 'make a dashboarder crud';

    private $file;

    private $codeBuilder;

    // Crud name
    private $name;

    // Custom table name
    private $custom_table_name;

    public function __construct(File $file, CodeBuilder $codeBuilder)
    {
        parent::__construct();

        $this->file = $file;

        $this->codeBuilder = $codeBuilder;
    }

    public function handle()
    {
        $this->line("\t... Welcome To Dashboarder ...");

        $this->name = $this->option('name');
        $this->custom_table_name = $this->option('table');

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

    protected function getField($tableName)
    {
        $fieldsArray = DB::select(DB::raw('SHOW FIELDS FROM ' . $tableName));
        $validations = '';
        $formFields = [];
        $x = 0;
        foreach ($fieldsArray as $item) {

            $type = preg_replace("/\([^)]+\)/", "", $item->Type);
            $type = explode(' ', trim($type));
            $type = $type[0];

            $formFields[$x]['name'] = $item->Field;
            $formFields[$x]['type'] = $type;
            $formFields[$x]['required'] = ($item->Null == 'NO') ? true : false;

            if (($formFields[$x]['type'] === 'select' || $formFields[$x]['type'] === 'enum')) {
                preg_match('#\((.*?)\)#', $item->Type, $match);
                $options = $match[1];

                $formFields[$x]['options'] = $options;
            }

            $x++;
        }

        return $formFields;
    }
}
