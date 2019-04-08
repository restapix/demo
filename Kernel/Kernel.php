<?php

return [

    /**
     * service providers
     * all providers names
     */
    'providers' => [
        'AppServiceProvider'                => App\Demo\Kernel\Providers\AppServiceProvider::class,
        'RouteServiceProvider'              => App\Demo\Kernel\Providers\RouteServiceProvider::class,
        'ConsoleEventServiceProvider'       => App\Demo\Kernel\Providers\ConsoleEventServiceProvider::class,
    ],
];