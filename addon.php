<?php

return [
    'version' => 5,
    'namespace' => 'App\Generators',
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
        App\Generators\Providers\AddonServiceProvider::class,
        App\Generators\Providers\RouteServiceProvider::class,
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
