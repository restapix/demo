<?php

namespace App\Demo\Kernel\Providers;

use Resta\Contracts\BootContracts;
use Resta\Provider\ServiceProviderManager;
use App\Demo\Api\V1\Factory\Products\Resources\Cakes\Cakes;
use App\Demo\Api\V1\Factory\Products\Interfaces\CakesInterface;

class AppServiceProvider extends ServiceProviderManager implements BootContracts
{
    /**
     * boot service provider
     *
     * @return mixed|void
     */
    public function boot()
    {
        $this->app->bind(CakesInterface::class,Cakes::class);
    }

    /**
     * register service provider
     *
     * @return void
     */
    public function register()
    {
        // while developing in the controller,
        // in addition to the config variables
        // it is added your config files in the controller directory
        $this->app->loadConfig(function()
        {
            if(defined('endpoint')){
                return path()->controller(endpoint,true).'/Config';
            }
            return null;
        });
    }
}