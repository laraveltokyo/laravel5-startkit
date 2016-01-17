<?php

namespace App\Auth;

return [
    'version' => 5,
    'namespace' => __NAMESPACE__,
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
        Providers\AddonServiceProvider::class,
        Providers\DatabaseServiceProvider::class,
        Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [],
    ],
    'http' => [
        'domain' => env('APP_AUTH_DOMAIN'),
        'prefix' => env('APP_AUTH_PATH', 'auth'),
        'middlewares' => [],
        'route_middlewares' => [
            'auth' => Http\Middleware\Authenticate::class,
            'auth.basic' => Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
            'guest' => Http\Middleware\RedirectIfAuthenticated::class,
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [],
];
