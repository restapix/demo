<?php

namespace App\Demo\Api\V1\Factory\Products\Interfaces;

use App\Demo\Api\V1\Factory\Products\Resources\Cakes\Cakes;

interface ProductsInterface
{
    /**
     * @return Cakes
     */
    public function cakes();
    

}