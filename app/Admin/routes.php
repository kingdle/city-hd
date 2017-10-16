<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'EconomicmonitorController@index');
    $router->get('/auth/completion-area', 'CompletionareaController@index');
    $router->get('/auth/economic-monitor', 'EconomicmonitorController@index');
    $router->get('/auth/616', 'SixController@index');
    $router->get('/auth/616/content', 'SixController@show');
    $router->get('/auth/industry-town', 'TownController@index');
    $router->get('/auth/industry-town/content', 'TownController@show');
    $router->get('/auth/one-policy', 'PolicyController@index');
    $router->get('/auth/economic-benchmark', 'EconomicbenchmarkController@index');
    $router->get('/auth/area-development', 'AreadevController@index');
    $router->get('/auth/project-monitor', 'ProjectController@index');
    $router->get('/auth/project-monitor/content', 'ProjectController@show');
    $router->get('/auth/search', 'SearchController@index');
    $router->get('/server', 'ServerController@index');
    $router->get('/home', 'HomeController@index');
    $router->resource('users', UserController::class);


    $router->resources([

        'tags'                  => TagController::class,
        'users'                 => UserController::class,
        'images'                => ImageController::class,
        'posts'                 => PostController::class,
        'videos'                => VideoController::class,
        'articles'              => ArticleController::class,
        'painters'              => PainterController::class,
        'categories'            => CategoryController::class,
        'messages'              => MessageController::class,
        'multiple-images'       => MultipleImageController::class,

        'movies/in-theaters'    => Movies\InTheaterController::class,
        'movies/coming-soon'    => Movies\ComingSoonController::class,
        'movies/top250'         => Movies\Top250Controller::class,

        'world/country'         => World\CountryController::class,
        'world/city'            => World\CityController::class,
        'world/language'        => World\LanguageController::class,

        'china/province'        => China\ProvinceController::class,
        'china/city'            => China\CityController::class,
        'china/district'        => China\DistrictController::class,
    ]);

});
