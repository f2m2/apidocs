<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the API Doc HTML are stored...
    |--------------------------------------------------------------------------
    |
    */

    // head
    'index_template_path' => 'vendor/f2m2/apidocs/src/templates/docs/index.blade.php',
    'head_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/head.blade.php',
    'introduction_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/introduction.blade.php',
    'body_content_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/body_content.blade.php',
    'compile_content_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/compile_content.blade.php',
    'nav_items_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/nav_items.blade.php',
    'navigation_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/navigation.blade.php',
    'parameters_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/parameters.blade.php',
    'section_header_template_path' => 'vendor/f2m2/apidocs/src/templates/includes/section_header.blade.php',
    'default_layout_template_path' => 'vendor/f2m2/apidocs/src/templates/layouts/default.blade.php',


    /*
    |--------------------------------------------------------------------------
    | Where the Assets are stored
    |--------------------------------------------------------------------------
    |
    */

    'assets_path' => 'vendor/f2m2/apidocs/src/templates/assets/',
    'logo_path' => '/assets/docs/{prefix}/img/f2m2_logo.svg',

    /*
    |--------------------------------------------------------------------------
    | Where the generated HTML Files will be saved...
    |--------------------------------------------------------------------------
    |
    */

    'view_target_path'   => app_path('views'),

];
