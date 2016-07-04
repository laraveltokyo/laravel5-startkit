<?php

namespace App\Debug;

return [
    'version' => 5,
    'namespace' => __NAMESPACE__,
    'directories' => [
        'classes',
    ],
    'files' => [
        'helpers.php',
    ],
    'paths' => [
        'config' => 'config',
        'lang' => 'lang',
        'specs' => 'specs',
        'views' => 'views',
        'tests' => 'tests',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
        Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [
        ],
    ],
    'http' => [
        'middlewares' => [
        ],
        'route_middlewares' => [
        ],
    ],
    'routes' => [
        'domain' => env('APP_ADDON_DOMAIN'),
        'prefix' => env('APP_ADDON_PATH', 'debug'),
        'namespace' => __NAMESPACE__.'\Controllers',
        'middleware' => [
            'web',
        ],
        'files' => [
            'routes.php',
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [
    ],
];
