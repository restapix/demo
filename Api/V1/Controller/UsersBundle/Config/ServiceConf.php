<?php
/**
 * Service conf file
 * it is mainly service provider for service
 * service provider
 */

return [

    /**
     * Service dump object
     * it is mainly service provider for service
     * service provider
     */
    'dataDump'=>false,

    /**
     * Service dummy object
     * it providers dummy data for service
     */
    'dummy'=>false,

    /**
     * Route parameters for method
     * client route parameters
     */
     'routeParameters'=>[
        'get'=>[
            'index'=>[
                'pattern'=>[
                    'id'=>'[0-9]+'
                ]
            ]
        ]
     ]

];
