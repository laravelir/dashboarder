<?php

namespace Laravelir\Dashboarder\Traits;

trait GetStubs
{

    protected static function getRepositoryStub()
    {
        return file_get_contents(static::stubPath() . "/dashboarder.stub");
    }

    protected static function getStub($type)
    {
        return file_get_contents(static::stubPath() . "/$type.stub");
    }

    public static function stubPath()
    {
        $vendor = "vendor/laravelir/dashboarder";
        return resource_path($vendor . '//stubs');
    }
}
