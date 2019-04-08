<?php

namespace App\Demo\Api\V1;

use Resta\Contracts\HandleContracts;

class ServiceMiddlewareManager implements HandleContracts
{
    /**
     * @return array
     */
    public function handle()
    {
        return [
              //'authenticate'=>'all',
              //'clientApiToken'=>'all',
        ];
    }

    /**
     * @return array
     */
    public function after()
    {
        return [];
    }

     /**
      * @return array
      */
     public function exclude()
     {
        return [
            'all'=>['hook','login','logout']
         ];
     }
}
