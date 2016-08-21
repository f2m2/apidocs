<?php namespace F2m2\Apidocs\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use F2m2\Apidocs\Commands\ApiDocsGenerator;

class ApiDocsGeneratorCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'apidocs:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generates API Documentation.';

	/**
	 * The console command description.
	 *
	 * @var DocsGenerator
	 */

	protected $generator;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(ApiDocsGenerator $generator)
	{
		parent::__construct();

		$this->generator = $generator;
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		if (!is_null($this->argument('prefix'))) {
			// Command line argument takes 1st precedence.
			$prefix = $this->argument('prefix');
		}
		else {
			// Check for an environment variable, so you don't have to type
			// the prefix in each time. Otherwise, ask them.
			if (!empty(getenv('APIDOCS_PREFIX'))) {
				$prefix = getenv('APIDOCS_PREFIX');
			} else {
				$prefix = $this->ask('What is the API Prefix?  i.e. "api/v1"');
			}
		}
		$this->info('Generating ' . $prefix . ' API Documentation.');

	   // generate the docs
	   $this->generator->make($prefix);

	   $dot_prefix = str_replace('/', '.', $prefix);

       $this->info('API Docs have been generated!');
       $this->info('');
       $this->info('Add the following Route to "app/routes.php" > ');

		// All done!
        $this->info(sprintf(
            "\n %s" . PHP_EOL,
            "Route::get('docs', function(){
            	return View::make('docs." . $dot_prefix . ".index');
            });"
        ));
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('prefix', InputArgument::OPTIONAL, 'Api Prefix (i.e. "api/v1"'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	// protected function getOptions()
	// {
	// 	return array(
	// 		array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
	// 	);
	// }

}
