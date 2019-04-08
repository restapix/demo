<?php

namespace App\Demo\Api\V1\Exception;

use Exception;
use App\Demo\Api\V1\ServiceAnnotationsManager;

class UserException extends Exception
{
    //get app annotations controller
    use ServiceAnnotationsManager;

    /**
     * @var string $message
     */
    protected $message = 'User Exception';

    /**
     * @var string $lang
     */
    protected $lang = 'User';

    /**
     * @var string
     */
     protected $code = 400;

    /**
     * @method event
     * @param $exception
     * @return mixed|void
     */
    public function event($exception)
    {
        /**
         * You can run the event directly when the exception is thrown.
         * As an example you can log.
        */
        //logger()->emergency($exception);
    }
}