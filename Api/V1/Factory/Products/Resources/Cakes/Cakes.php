<?php

namespace App\Demo\Api\V1\Factory\Products\Resources\Cakes;

use App\Demo\Api\V1\Factory\FactoryManager;
use App\Demo\Api\V1\Factory\Products\Interfaces\CakesInterface;

class Cakes extends FactoryManager implements CakesInterface
{
    /**
     * @return mixed|string
     */
    public function get()
    {
        return 'Cakes';
    }
}