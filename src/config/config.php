<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Where the templates for the API Doc HTML are stored...
    |--------------------------------------------------------------------------
    |
    */
    'body_content_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/body_content.blade.php',
    'body_js_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/body_js.blade.php',
    'compile_content_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/compile_content.blade.php',
    'head_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/head.blade.php',
    'introduction_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/introduction.blade.php',
    'nav_items_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/nav_items.blade.php',
    'navigation_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/navigation.blade.php',
    'parameters_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/parameters.blade.php',
    'response_collection_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/response_collection.blade.php',
    'response_fail_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/response_fail.blade.php',
    'response_single_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/response_single.blade.php',
    'section_header_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/includes/section_header.blade.php',
    'index_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/docs/index.blade.php',
    'default_layout_template_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/layouts/default.blade.php',

    'assets_path' => 'workbench/f2m2/apidocs/src/F2m2/Apidocs/templates/assets/',
    'logo_path' => '/assets/docs/{prefix}/img/f2m2_logo.svg',
    /*
    |--------------------------------------------------------------------------
    | Where the generated HTML Files will be saved...
    |--------------------------------------------------------------------------
    |
    */
    'public_path'   => app_path('database/seeds'),

    'view_target_path'   => app_path('views'),

];
