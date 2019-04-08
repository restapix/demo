<?php

namespace App\Demo\Api\V1\Model\Builder;

use App\Demo\Api\V1\Model\Product;
use App\Demo\Api\V1\Model\Contract\ProductContract;
use Store\Packages\Database\Doctrine\Dbal\Connection as Db;

class ProductBuilder implements ProductContract
{
    /**
     * @return mixed
     */
    public function get()
    {
        //model all data
        return Product::pagination();
    }

    /**
     * @return mixed
     */
     public function create()
     {
        //create Product
        return Product::create([]);
     }

     /**
      * @return mixed
      */
     public function update()
     {
        //update Product
        return Product::where()->update([]);
     }

     /**
      * @return mixed
      */
     public function delete()
     {
        //delete Product
        return Product::where()->delete();
     }
}
