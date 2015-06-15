<?php namespace mhamlet\Apidocs;

use Illuminate\Support\ServiceProvider;
use mhamlet\Apidocs\ApiDocsGeneratorCommand;

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
		$this->package('mhamlet/apidocs');
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

		$this->app['apidocs.generate'] = $this->app->share(function($app)
        {
            return $this->app->make('mhamlet\Apidocs\Commands\ApiDocsGeneratorCommand');
        });


        $this->commands('apidocs.generate');
	}

}
