<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    return 'hello world';
});

Route::get('/posts',function (){
    $posts = App\Models\Post::all();
    return $posts;
})->middleware('api','cors');

Route::get('/post/{id}',function ($id){
    $posts = App\Models\Post::find($id);
    return $posts;
})->middleware('api','cors');

Route::get('/svn',function (){
    $svn = App\App_update::all();
    return $svn;
})->middleware('api','cors');
