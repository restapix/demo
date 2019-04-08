<?php

namespace App\Demo\Api\V1\Request;

trait Request
{
    /**
     * auto validator keys
     *
     * @var array
     */
    public $autoObjectValidate = [
        'Store\Services\Validator' => ['date','email','creditCard','params'=>[]]
    ];

    /**
     * @var $page
     */
    protected $page;

    /**
     * @regex(^\d+$)
     * @exception(name:page params:page=page)
     * @return mixed
     */
    protected function page()
    {
        return $this->page;
    }

    /**
     * @return void
     */
    protected function rule()
    {
        //
    }
}