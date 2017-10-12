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
    $router->get('/auth/616/content', 'SixController@create');
    $router->get('/auth/industry-town', 'TownController@index');
    $router->get('/auth/one-policy', 'PolicyController@index');
    $router->get('/auth/economic-benchmark', 'EconomicbenchmarkController@index');
    $router->get('/auth/area-development', 'AreadevController@index');
    $router->get('/auth/project-monitor', 'ProjectController@index');
    $router->get('/auth/search', 'SearchController@index');
    $router->get('/server', 'ServerController@index');
    $router->get('/home', 'HomeController@index');
    $router->resource('users', UserController::class);

});
