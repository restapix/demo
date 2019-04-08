<?php

namespace App\Demo\Repository\Email;

use Store\Traits\RepositoryTrait;
use App\Demo\Api\V1\ServiceAnnotationsManager;

class EmailAdapter
{
    use RepositoryTrait,ServiceAnnotationsManager;

    /**
     * @var string
     */
    protected $adapter='Main';

}