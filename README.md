
# Laravel API Docs Generator

This Laravel package provides an API Documentation generator based upon your Routes and Controller Method DocBlock comments.  

Improved fork of f2m2/apidocs

## Installation

#### Laravel 4.2 and Below

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `mhamlet/apidocs`.

    "require": {
        "laravel/framework": "4.2.*",
        "mhamlet/apidocs": "dev-master"
    }

Next, update Composer from the Terminal:

    composer update --dev

Once the packaage has installed, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'mhamlet\Apidocs\ApidocsServiceProvider',

Run the `artisan` command from the Terminal to see the new `apidocs` command.

    php artisan apidocs:generate


Create a copy of the API Docs Config by running this `artisan` command:

    php artisan config:publish mhamlet/apidocs


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

