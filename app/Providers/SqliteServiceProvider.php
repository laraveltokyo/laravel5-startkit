<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SqliteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Make database for sqlite */
        if (config('database.default') == 'sqlite') {
            // check '{{env}}.sqlite' exists
            $databaseFile = config('database.connections.sqlite.database');

            if (!file_exists($databaseFile)) {
                // touch 'local.sqlite'
                info('Make Sqlite File "'.$databaseFile.'"');
                file_put_contents($databaseFile, '');
            }
        }
    }
}
