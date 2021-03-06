<?php

namespace App\Demo\Api\V1;

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class ServiceLogManager
{
    /**
     * @var $adapter
     */
    public $adapter='file';

    /**
     * @param $output
     * @param string $file
     * @param string $type
     *
     * @throws \Exception
     */
    public function file($output,$file="access",$type="info")
    {
        //log register path
        $filePath = path()->appLog().'/'.$file.'.log';

        //monologue library and make the necessary adjustments.
        $log = new Logger('monolog');

        $handler = new RotatingFileHandler($filePath, 0, Logger::INFO, true, 0664);

        # '/' in date format is treated like '/' in directory path
        # so Y/m/d-filename will create path: eg. 2019/01/01-filename.log
        $handler->setFilenameFormat('{date}-{filename}', 'Y/m/d');
        $log->pushHandler($handler);

        //We write to the specified file.
        $log->{$type}(json_encode($output));
    }
}
