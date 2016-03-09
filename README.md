
# Laravel API Docs Generator - Improved version

This Laravel package provides an API Documentation generator based upon your Routes and Controller Method DocBlock comments.

Also works with controller comments - @param only.

If you have global parameters that are passed to every action in the controller, you may define it in the controller doc block. With this, you do not need to add coomon parameters to every action in the controller.

##### Controller DocBlock Example
Below is a controller docBlock example.

    /**
    * Class ApiDemoController
    *
    * @param  int  $major  The major beacon of the restaurant
    * @param  mixed  $app_version  Application version
    *
    * @package App\Http\Controllers\Api
    */


## Installation

#### Laravel 5.1

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `f2m2/apidocs`.

    "require": {
        "laravel/framework": "~5.1",
        "igorgavric/apidocs": "dev-gavric"
    }

Next, update Composer from the Terminal:

    composer update

Once the packaage has installed, the final step is to add the service provider. Open `config/app.php`, and add a new item to the providers array.

    'Igorgavric\Apidocs\ApidocsServiceProvider::class',

Run the `artisan` command from the Terminal to see the new `apidocs` command.

    php artisan apidocs:generate

Create a copy of the API Docs Config by running this `artisan` command:

    php artisan vendor:publish

This repository is forked from https://github.com/f2m2/apidocs and added some custom functionality

Notes
-------

##### Route Prefix

Create a prefix for your routes with an API Version.  i.e. 'api/v1

    Route::group(['prefix' => 'api/v1'], function(){
         // ...
    });

##### DocBlock Example
Below is a docBlock example.

    /**
    * Display the specified resource.
    * GET /user/{id}
    *
    * @param  int  $id  The id of a User
    * @return Response
    */
    public function show($id)
    {
        // Display User
    }

License
-------

See [LICENSE](LICENSE.md) file.

