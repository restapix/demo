<?php

namespace App\Demo\Api\V1\Middleware;

use Store\Contracts\HandleTraitContract;
use Symfony\Component\HttpFoundation\Request;

class TrustedProxies implements HandleTraitContract
{
    /**
     * @return void
     */
    public function handle()
    {
        // tell Symfony about your reverse proxy
        request()->setTrustedProxies(

            // the IP address (or range) of your proxy
            ['::1'],

            // trust *all* "X-Forwarded-*" headers
            Request::HEADER_X_FORWARDED_ALL

            // or, if your proxy instead uses the "Forwarded" header
            // Request::HEADER_FORWARDED

            // or, if you're using AWS ELB
            // Request::HEADER_X_FORWARDED_AWS_ELB

        );

        // check for a trusted proxy.
        if(request()->isFromTrustedProxy()===false){
            throw new \InvalidArgumentException('You are not the trusted proxy');
        }
    }
}
