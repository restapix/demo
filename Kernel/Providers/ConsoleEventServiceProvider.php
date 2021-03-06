<?php

namespace App\Demo\Kernel\Providers;

use Resta\Provider\ServiceProviderManager;

class ConsoleEventServiceProvider extends ServiceProviderManager
{
    /**
     * register service provider
     *
     * @return void
     */
    public function register()
    {
        //your console events should only be run for the console.
        if($this->app->runningInConsole()){

            // by default we have written a migration event.
            // according to your needs you can write the event.
            event()->addListener('console','default',function($args){
                call_user_func_array([$this,'createModelForMigration'],[$args]);
            });
        }
    }

    /**
     * log for console event
     *
     * @param $args
     * @return mixed
     */
    private function createModelForMigration($args)
    {
        // if there is a value of migration create and model for the argument values,
        // then a model will be created when that migration is created.
        if($args['class']=="migration" && $args['classMethod']=="create" && isset($args['model'])){

            // The symfony process will be executed as an application method.
            $this->app->command('model create','model:'.strtolower($args['model']));
        }
    }
}