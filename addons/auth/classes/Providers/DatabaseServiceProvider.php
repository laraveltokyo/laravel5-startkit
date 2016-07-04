<?php

namespace App\Auth\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use App\Auth\Migrations;
use App\Auth\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap database services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('auth', [
            '1.0' => Migrations\Auth_1_0::class,
        ]);
    }
}
