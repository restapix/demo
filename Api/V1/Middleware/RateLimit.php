<?php

namespace App\Demo\Api\V1\Middleware;

use Store\Contracts\HandleTraitContract;
use Resta\Middleware\MiddlewareRateLimit;

class RateLimit extends MiddlewareRateLimit implements HandleTraitContract
{
    /**
     * @var array $rateLimits
     */
    protected $rateLimits = [
        'name' =>[
            'period' => 60,
            'limit' => 60,
            'ips' => []
        ]
    ];

    /**
     * @return void
     */
    public function handle()
    {
        parent::handle();
    }
}
