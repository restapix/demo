<?php

namespace App\Demo\Api\V1\Factory\Products;
                                   
use App\Demo\Api\V1\Factory\Products\Resources\Cakes\Cakes;

use App\Demo\Api\V1\Factory\FactoryManager;
use App\Demo\Api\V1\Factory\Products\Interfaces\ProductsInterface;

class ProductsManager extends FactoryManager implements ProductsInterface
{
    /**
     * @return Cakes
     */
    public function cakes() : Cakes
    {
        return new Cakes($this->factory);
    }
    

}