<?php

namespace App\Demo\Kernel\Providers;

use Resta\Router\Route;
use Resta\Contracts\BootContracts;
use Resta\Provider\ServiceProviderManager;

class RouteServiceProvider extends ServiceProviderManager implements BootContracts
{
    /**
     * boot service provider
     *
     * @return mixed|void
     */
    public function boot()
    {
        // we are bind the route class.
        $this->app->share('route',function(){
            return Route::class;
        });
    }

    /**
     * register service provider
     *
     * @return mixed|void
     */
    public function register()
    {
        // we will record the path data for the route.
        // We set the routeMapper variables and the route path.
        Route::setPath(function(){

            // we are sending the controller and routes.php path.
            return [
                //'controllerPath'    => 'controllerPath',
                //'routePath'         => 'routePath',
            ];
        });
    }

}