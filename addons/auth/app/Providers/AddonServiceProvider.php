<?php namespace App\Auth\Providers;

class AddonServiceProvider extends \Illuminate\Support\ServiceProvider {

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
		// $this->app->bind(
		// 	'Illuminate\Contracts\Auth\Registrar',
		// 	'App\Auth\Services\Registrar'
		// );
	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		View::addLocation(addon_path(addon_name(), 'resources/views'));
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
