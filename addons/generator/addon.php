<?php

use App\Generator as Addon;

return [
    'version' => 5,
    'namespace' => 'App\Generator',
    'directories' => [
        'classes',
    ],
    'files' => [
        'helpers.php',
    ],
    'paths' => [
        'config' => 'config',
        'lang' => 'resources/lang',
        'views' => 'resources/views',
    ],
    'providers' => [
        Addon\Providers\AddonServiceProvider::class,
        Addon\Providers\RouteServiceProvider::class,
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
    'includes_global_aliases' => true,
    'aliases' => [
    ],
];
