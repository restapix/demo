<?php

namespace App\Demo\Api\V1\Request\User;

use App\Demo\Api\V1\Request\Request;
use App\Demo\Api\V1\Request\RequestProvider;
use App\Demo\Api\V1\Request\RequestGenerator;

class UserRequest extends RequestProvider
{
    //request and request generator
    use Request,UserRequestGenerator,RequestGenerator;

    /**
     * The values ​​expected by the server.
     * @var array
     */
    protected $expected=['env'];

    /**
     * mandatory http method.
     * @var array
     */
    protected $http=[];

    /**
     * @var $date
     */
    protected $date;

    /**
     * @var $env
     */
    protected $env;

    /**
     * @return false|int
     */
    protected function date()
    {
        return strtotime($this->date);
    }

    /**
     * @regex(^local$|^production$)
     * @exception(name:env)
     *
     * @return mixed
     */
    protected function env()
    {
        return $this->env;
    }


}