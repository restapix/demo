<?php

namespace App\Demo\Api\V1\Events;

class UserRegistered
{
    /**
     * @var $param
     */
    public $param;

    /**
     * UserRegistered constructor.
     * @param null $param
     */
    public function __construct($param=null)
    {
        $this->param=$param;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }

}