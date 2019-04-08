<?php

namespace App\Demo\Api\V1\Middleware;

use Store\Contracts\HandleTraitContract;

class Authenticate implements HandleTraitContract
{
    /**
     * @return void
     */
    public function handle()
    {
        if(auth()->check()===false){
            exception()->domain('Authenticate permission error');
        }
    }
}
