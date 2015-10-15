<?php

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
        App\Auth\Providers\AddonServiceProvider::class,
        App\Auth\Providers\DatabaseServiceProvider::class,
        App\Auth\Providers\RouteServiceProvider::class,
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
