<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the API Doc HTML are stored...
    |--------------------------------------------------------------------------
    |
    */

    // head
    'index_template_path' => 'templates/docs/index.blade.php',
    'head_template_path' => 'templates/includes/head.blade.php',
    'introduction_template_path' => 'templates/includes/introduction.blade.php',
    'body_content_template_path' => 'templates/includes/body_content.blade.php',
    'compile_content_template_path' => 'templates/includes/compile_content.blade.php',
    'nav_items_template_path' => 'templates/includes/nav_items.blade.php',
    'navigation_template_path' => 'templates/includes/navigation.blade.php',
    'parameters_template_path' => 'templates/includes/parameters.blade.php',
    'section_header_template_path' => 'templates/includes/section_header.blade.php',
    'default_layout_template_path' => 'templates/layouts/default.blade.php',


    /*
    |--------------------------------------------------------------------------
    | Where the Assets are stored
    |--------------------------------------------------------------------------
    |
    */

    'assets_path' => 'templates/assets/',
    'logo_path' => '/assets/docs/{prefix}/img/f2m2_logo.svg',

    /*
    |--------------------------------------------------------------------------
    | Where the generated HTML Files will be saved...
    |--------------------------------------------------------------------------
    |
    */

    'view_target_path'   => app_path('views'),

];
