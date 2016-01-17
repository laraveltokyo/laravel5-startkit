<?php

namespace App\Debug\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        if (config('app.debug')) {
            parent::boot($router);
        }
    }

    /**
     * Define the routes for the addon.
     *
     * @param  \Illuminate\Routing\Router  $router  (injection)
     * @return void
     */
    public function map(Router $router)
    {
        $domain = addon()->config('addon.http.domain');
        $prefix = addon()->config('addon.http.prefix');
        $namespace = addon()->config('addon.namespace').'\Http\Controllers';

        $router->group(['domain' => $domain, 'prefix' => $prefix, 'namespace' => $namespace], function ($router) {
            require __DIR__.'/../Http/routes.php';
        });
    }
}
