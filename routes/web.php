<?php

/** @var \Laravel\Lumen\Routing\Router $routerr */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routers for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*$routerr->get('/', function () use ($routerr) {
    return $routerr->app->version();
});
*/

$router->get('/usuarios','UsuarioController@index');
$router->post('/usuarios','UsuarioController@store');
$router->get('/usuarios/{usuario}','UsuarioController@show');
$router->put('/usuarios/{usuario}','UsuarioController@update');
$router->patch('/usuarios/{usuario}','UsuarioController@update');
$router->delete('/usuarios/{usuario}','UsuarioController@destroy');