<?php

namespace App\Demo\Kernel;

use Resta\Support\VersionManager;

class Version extends VersionManager
{
    /**
     * list supported version numbers
     *
     * @var array
     */
    protected static $supportedVersions = ['V1'];

    /**
     * get console version
     *
     * @return string
     */
    public static function consoleVersion()
    {
        return 'V1';
    }

}