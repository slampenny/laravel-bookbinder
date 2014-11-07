<?php namespace Jlapp\Bookbinder;

use Illuminate\Support\ServiceProvider;

class BookbinderServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
            $this->package('jlapp/bookbinder');
//            App::bind('TransformModel', function() { return new TransformModel;});
//            App::bind('EpubModel', function() { return new EpubModel;});
            
            require_once __DIR__ .'/routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
