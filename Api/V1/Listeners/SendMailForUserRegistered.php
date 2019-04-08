<?php

namespace App\Demo\Api\V1\Listeners;

use App\Demo\Api\V1\Events\UserRegistered;
use App\Demo\Api\V1\ServiceAnnotationsManager;

class SendMailForUserRegistered
{
    //get service annotations
    use ServiceAnnotationsManager;

    /**
     * @param UserRegistered $UserRegistered
     */
    public function handle(UserRegistered $UserRegistered)
    {
        //
    }

}