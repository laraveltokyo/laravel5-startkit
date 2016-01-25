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
        parent::boot($router);
    }

    /**
     * Define the routes for the addon.
     *
     * @param  \Illuminate\Routing\Router  $router (injection)
     * @return void
     */
    public function map(Router $router)
    {
        $attributes = [
            'domain' => addon()->config('addon.routes.domain', null),
            'prefix' => addon()->config('addon.routes.prefix', ''),
            'middleware' => addon()->config('addon.routes.middleware', []),
            'namespace' => addon()->config('addon.namespace').'\Http\Controllers',
        ];

        $files = array_map(function ($file) {
            return addon()->path($file);
        }, addon()->config('addon.routes.files', ['classes/Http/routes.php']));

        $router->group($attributes, function ($router) use ($files) {
            foreach ($files as $file) {
                require $file;
            }
        });
    }
}
