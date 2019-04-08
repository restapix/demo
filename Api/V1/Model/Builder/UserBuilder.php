<?php

namespace App\Demo\Api\V1\Model\Builder;

use App\Demo\Api\V1\Model\User;
use App\Demo\Api\V1\Model\Contract\UserContract;
use Store\Packages\Database\Doctrine\Dbal\Connection as Db;

class UserBuilder implements UserContract
{
    /**
     * @return mixed
     */
    public function get()
    {
        //model all data
        return User::pagination();
    }

    /**
     * @return mixed
     */
     public function create()
     {
        //create User
        return User::create([]);
     }

     /**
      * @return mixed
      */
     public function update()
     {
        //update User
        return User::where()->update([]);
     }

     /**
      * @return mixed
      */
     public function delete()
     {
        //delete User
        return User::where()->delete();
     }
}
