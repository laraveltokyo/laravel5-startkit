<?php

namespace App\Auth\Providers;

class AddonServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        View::addLocation(realpath(addon_path(addon_name(), 'resources/views')));

        $this->setupPublishFiles();
    }

    protected function setupPublishFiles()
    {
        $this->publishes([
            addon_path(addon_name(), 'public') => base_path('public'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
