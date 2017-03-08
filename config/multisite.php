<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Host
    |--------------------------------------------------------------------------
    |
    | This config can be used to determine (sub)domains. When using
    | subdomains you can do something like 'sub'.config('multisite.host').
    |
    */

    'host' => env('MULTISITE_HOST', 'localhost.dev'),

    /*
    |--------------------------------------------------------------------------
    | Site
    |--------------------------------------------------------------------------
    |
    | The site that needs to be set when nothing is set.
    |
    */

    'site' => env('MULTISITE_SITE'),

    /*
    |--------------------------------------------------------------------------
    | Views
    |--------------------------------------------------------------------------
    |
    | - overwrite: Enable/disable overwrites for views
    | - overwriteable: Which views can be overwrited
    | - sites: Where are your site views stored (relative to resources/views)
    |
    */

    'views' => [
        'overwrite' => true,
        'overwriteable' => 'partials.*',
        'sites' => 'sites',
    ],

];
