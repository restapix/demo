<?php

namespace App\Demo\Api\V1\Middleware;

use Store\Contracts\HandleTraitContract;

class SetClientTimezone implements HandleTraitContract
{
    /**
     * @return void
     */
    public function handle()
    {
        //get client timezone via header information
        $headerTimezone=(isset($this->getClientHeaders()['timezone']))
                ? $this->getClientHeaders()['timezone'][0] : 'Europe/Istanbul';

        //timezone coming normally
        $timezone_name=$headerTimezone;

        //is numeric for timezone
        if(is_numeric($headerTimezone)){

            //This is just an example. In application this will come from Javascript (via an AJAX or something)
            $timezone_offset_minutes = 180;

            // Convert minutes to seconds
            $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        }

        //set timezone for client
        date_default_timezone_set($timezone_name);
    }
}
