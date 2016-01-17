<?php

namespace App\Debug;

return [
    'version' => 5,
    'namespace' => __NAMESPACE__,
    'directories' => [
        'classes',
    ],
    'paths' => [
        'assets' => 'resources\/assets',
        'lang' => 'resources\/lang',
        'specs' => 'resources\/specs',
        'views' => 'resources\/views',
        'tests' => 'tests',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
        Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [],
    ],
    'http' => [
        'domain' => env('APP_DEBUG_DOMAIN'),
        'prefix' => env('APP_DEBUG_PATH', 'debug'),
        'middlewares' => [],
        'route_middlewares' => [],
    ],
    'includes_global_aliases' => true,
    'aliases' => [],
];
