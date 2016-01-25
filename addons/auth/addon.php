<?php

namespace App\Auth;

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
        'assets' => 'assets',
        'lang' => 'lang',
        'specs' => 'specs',
        'views' => 'views',
        'tests' => 'tests',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
        Providers\DatabaseServiceProvider::class,
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
            'auth' => new ClassName('Http\Middleware\Authenticate'),
            'auth.basic' => new ClassName('\Illuminate\Auth\Middleware\AuthenticateWithBasicAuth'),
            'guest' => new ClassName('Http\Middleware\RedirectIfAuthenticated'),
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [
    ],
    'routes' => [
        'domain' => env('APP_ADDON_DOMAIN'),
        'prefix' => env('APP_ADDON_PATH', '/'),
        'middleware' => [
            'web',
        ],
        'files' => [
            'classes/Http/routes.php',
        ],
        'landing' => '/',
        'home' => '/home',
        'login' => '/login',
    ],
];
