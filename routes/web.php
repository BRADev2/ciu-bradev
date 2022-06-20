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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/usuarios', 'UserController@index');
$router->get('/usuarios/create', 'UserController@create');
$router->post('/usuarios', 'UserController@store');
$router->get('/usuario/{id}', 'UserController@show');
$router->get('/usuarios/{id}/edit', 'UserController@edit');
$router->put('/usuario/{id}', 'UserController@update');
$router->delete('/usuario/{id}', 'UserController@destroy');