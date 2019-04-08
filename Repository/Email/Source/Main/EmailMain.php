<?php

namespace App\Demo\Repository\Email\Source\Main;

use App\Demo\Repository\Email\EmailContract;
use App\Demo\Api\V1\ServiceAnnotationsManager;

class EmailMain implements EmailContract
{
    use ServiceAnnotationsManager;

    /**
     * @return mixed|string
     */
    public function getRepository()
    {
        return 'Email repository';
    }
}