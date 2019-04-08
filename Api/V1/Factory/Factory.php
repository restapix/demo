<?php

namespace App\Demo\Api\V1\Factory;
                                   
use App\Demo\Api\V1\Factory\Products\ProductsManager;
use App\Demo\Api\V1\Factory\Products\Interfaces\ProductsInterface;

/**
 * Class Factory
 * @package App\Demo\Api\V1\Factory
 * @property ProductsInterface products
 */
class Factory extends FactoryManager
{
    /**
     * @return ProductsInterface
     */
    public static function products() : ProductsInterface
    {
        return static::singleton(ProductsManager::class);
    }
    

}