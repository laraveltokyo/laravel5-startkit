<?php

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
        App\Debug\Providers\AddonServiceProvider::class,
        App\Debug\Providers\RouteServiceProvider::class,
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
