<?php

namespace App\Demo\Api\V1\Middleware;

use Store\Traits\ClientApiTokenTrait;
use Store\Contracts\HandleTraitContract;

class ClientApiToken implements HandleTraitContract
{
    //client token trait
    use ClientApiTokenTrait;

    /**
     * @var string
     */
    protected $tokenFormat='header'; //get or header

    /**
     * @var string
     */
    protected $tokenKey='apikey';

    /**
     * @var string
     */
    protected $tokenSign='ApiKey';

    /**
     * @method clientTokens
     * @define All Client Tokens
     * @return array
     */
    private function clientTokens()
    {
        return [
            'testApiClient'=>'api123456'
        ];
    }
}
