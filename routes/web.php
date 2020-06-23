<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return "API RESTfull MiniBlog";
});

$router->group(['prefix'=>'api/v1'], function() use($router) {

    // Rotas Posts
    $router->group(['prefix'=>'posts'], function() use($router) {
        $router->get('/', 'PostController@index');
        $router->post('/', 'PostController@create');
        $router->get('/{id}', 'PostController@show');
        $router->post('/{id}', 'PostController@update');
        $router->delete('/{id}', 'PostController@destroy');
    });

    // Rotas Posts
    $router->group(['prefix'=>'categories'], function() use($router) {
        $router->get('/', 'CategoriesController@index');
    });

});
