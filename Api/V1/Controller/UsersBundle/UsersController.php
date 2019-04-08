<?php

namespace App\Demo\Api\V1\Controller\UsersBundle;

use App\Demo\Api\V1\Factory\Products\Interfaces\CakesInterface;
use App\Demo\Api\V1\Request\User\UserRequest;
use App\Demo\Repository\Email\EmailContract;

class UsersController extends App
{
    /**
     * #define: get all users
     *
     * @param EmailContract $emailContract
     * @param UserRequest $userRequest
     * @param CakesInterface $cakes
     * @return mixed|array
     */
    public function index(EmailContract $emailContract,UserRequest $userRequest,CakesInterface $cakes)
    {
        return [
            'cakes'     => $cakes->get(),
            'request'   => $userRequest->all(),
            'users'     => $this->userBuilder()->get(),
            'email'     => $emailContract->getRepository(),
        ];
    }

    /**
     * #define: create user
     *
     * @return mixed|array
     */
    public function create()
    {
        return $this->userBuilder()->create();
    }
}