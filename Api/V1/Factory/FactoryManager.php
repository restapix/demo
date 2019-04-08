<?php

namespace App\Demo\Api\V1\Factory;

abstract class FactoryManager
{
    /**
     * @var $instance array
     */
    protected static $instance = [];

    /**
     * @var $factory
     */
    protected $factory;

    /**
     * ProductsFacade constructor.
     * @param $factory Factory
     */
    public function __construct($factory=null)
    {
        $this->factory = $factory;
    }

    /**
     * @param $data
     * @return mixed
     */
    protected static function singleton($data)
    {
        if(!isset(static::$instance[$data])){
            static::$instance[$data] = new $data(new static());
        }
        return static::$instance[$data];
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        if(method_exists($this,$name)){
            return $this->{$name}();
        }
        return null;
    }
}