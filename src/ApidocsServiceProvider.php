<?php namespace F2m2\Apidocs;

use Illuminate\Support\ServiceProvider;
use F2m2\Apidocs\ApiDocsGeneratorCommand;

class ApidocsServiceProvider extends ServiceProvider {

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
		$this->registerApiDocsGeneratorCommand();
	}

	public function boot(){

		$this->publishes([
        	 __DIR__.'/config/apidocs.php' => config_path('apidocs.php'),
    	]);

    	$this->mergeConfigFrom(
    		__DIR__.'/config/apidocs.php', 'apidocs'
		);
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

	private function registerApiDocsGeneratorCommand(){

 		$this->app->singleton('apidocs.generate', function ($app) {
            return $app['F2m2\Apidocs\Commands\ApiDocsGeneratorCommand'];
        });

        $this->commands('apidocs.generate');

	}
}
