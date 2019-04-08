<?php

namespace App\Demo\Api\V1\Controller\UsersBundle;

use App\Demo\Api\V1\ServiceAnnotationsManager;

abstract class App
{
    //get service annotations
    use ServiceAnnotationsManager;

    /**
     * service restrictions method.
     *
     * restrictions for production environment
     * @return array
     */
    public function restrictions()
    {
        return [];
    }
}
