<?php

namespace App\Demo\Api\V1\Model\Contract;

interface UserContract
{
    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function create();

    /**
     * @return mixed
     */
    public function update();

    /**
     * @return mixed
     */
    public function delete();
}