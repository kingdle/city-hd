<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'EconomicmonitorController@index');
    $router->get('/auth/economic-monitor', 'EconomicmonitorController@index');
    $router->get('/auth/616', 'SixController@index');
    $router->get('/auth/industry-town', 'TownController@index');
    $router->get('/auth/one-policy', 'PolicyController@index');
    $router->get('/auth/economic-benchmark', 'EconomicbenchmarkController@index');
    $router->get('/auth/area-development', 'AreaController@index');
    $router->get('/auth/project-monitor', 'ProjectController@index');
    $router->get('/auth/search', 'SearchController@index');
    $router->get('/server', 'HomeController@index');
    $router->resource('users', UserController::class);

});
