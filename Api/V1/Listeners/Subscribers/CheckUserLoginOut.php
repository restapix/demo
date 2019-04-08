<?php

namespace App\Demo\Api\V1\Listeners\Subscribers;

use App\Demo\Api\V1\ServiceAnnotationsManager;

class CheckUserLoginOut
{
    //get service annotations
    use ServiceAnnotationsManager;

    /**
     * @var $param
     */
    public $param;

    /**
     * CheckUserLoginOut constructor.
     * @param $param
     */
    public function __construct($param)
    {
        $this->param=$param;
    }

    /**
     * @return void|mixed
     */
    public function onLogin()
    {
        //onLogin method handler
    }

    /**
     * @return void|mixed
     */
    public function onLogout()
    {
        //onLogout method handler
    }

    /***
     * @param \Resta\EventDispatcher\EventManager $event
     */
    public function subscriber($event)
    {
        $event->addSubscriber([

           'login'=>'onLogin',
           'logout'=>'onLogout'

        ]);
    }

}