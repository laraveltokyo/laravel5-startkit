<?php

use App\Auth as Addon;

return [
    'version' => 5,
    'namespace' => 'App\Auth',
    'directories' => [
        'classes',
    ],
    'paths' => [
        'assets' => 'resources/assets',
        'lang' => 'resources/lang',
        'specs' => 'resources/specs',
        'views' => 'resources/views',
        'tests' => 'tests',
    ],
    'providers' => [
        Addon\Providers\AddonServiceProvider::class,
        Addon\Providers\DatabaseServiceProvider::class,
        Addon\Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [],
    ],
    'http' => [
        'middlewares' => [],
        'route_middlewares' => [
            'auth' => App\Auth\Http\Middleware\Authenticate::class,
            'auth.basic' => Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            'guest' => App\Auth\Http\Middleware\RedirectIfAuthenticated::class,
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [],
];
