<?php

namespace App\Demo\Api\V1;

use Store\Traits\Annotations;
use Resta\Contracts\ApplicationContracts;

/**
 * Trait ServiceAnnotationsManager
 * @method \App\Demo\Api\V1\Model\Builder\ProductBuilder productBuilder
 * @method \App\Demo\Api\V1\Model\Builder\UserBuilder userBuilder
 * @method \App\Demo\Repository\Email\EmailContract emailRepository
  * @property \App\Demo\Api\V1\Factory\Factory factory
  * @property ApplicationContracts app
 */
trait ServiceAnnotationsManager
{
    use Annotations;
}
