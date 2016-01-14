<?php

use App\Debug as Addon;

return [
    'version' => 5,
    'namespace' => 'App\Debug',
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
        Addon\Providers\AddonServiceProvider::class,
        Addon\Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [],
    ],
    'http' => [
        'middlewares' => [],
        'route_middlewares' => [],
    ],
    'includes_global_aliases' => true,
    'aliases' => [],
];
