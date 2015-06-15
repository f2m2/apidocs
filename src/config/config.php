<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the API Doc HTML are stored...
    |--------------------------------------------------------------------------
    |
    */

    // head
    'index_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/docs/index.blade.php',
    'head_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/head.blade.php',
    'introduction_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/introduction.blade.php',
    'body_content_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/body_content.blade.php',
    'compile_content_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/compile_content.blade.php',
    'nav_items_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/nav_items.blade.php',
    'navigation_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/navigation.blade.php',
    'parameters_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/parameters.blade.php',
    'section_header_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/includes/section_header.blade.php',
    'default_layout_template_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/layouts/default.blade.php',


    /*
    |--------------------------------------------------------------------------
    | Where the Assets are stored
    |--------------------------------------------------------------------------
    |
    */

    'assets_path' => 'vendor/mhamlet/apidocs/src/mhamlet/Apidocs/templates/assets/',
    'logo_path' => '/assets/docs/{prefix}/img/mhamlet_logo.svg',

    /*
    |--------------------------------------------------------------------------
    | Where the generated HTML Files will be saved...
    |--------------------------------------------------------------------------
    |
    */

    'view_target_path'   => app_path('views'),

];
