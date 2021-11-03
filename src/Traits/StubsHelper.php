<?php

namespace Laravelir\Dashboarder\Traits;

trait StubsHelper
{

    protected static function getRepositoryStub()
    {
        return file_get_contents(static::stubPath() . DIRECTORY_SEPARATOR .  "dashboarder.stub");
    }

    protected static function getStub($type)
    {
        return file_get_contents(static::stubPath() . DIRECTORY_SEPARATOR . "$type.stub");
    }

    public static function stubPath()
    {
        $ds = DIRECTORY_SEPARATOR;
        $vendor = 'vendor' . $ds . 'laravelir' . $ds . 'dashboarder';
        return resource_path($vendor . $ds . 'stubs');
    }
}
