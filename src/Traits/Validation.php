<?php

namespace Laravelir\Dashboarder\Traits;

trait Validation
{
    public static function ensureRepositoryServiceProviderDoesntAlreadytExist($providerName)
    {
        if (file_exists(self::getRepositoryServiceProviderPath($providerName))) {
            return false;
        }
        return true;
    }
}
