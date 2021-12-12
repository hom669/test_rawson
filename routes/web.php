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

$router->get('/get-key', function (){
    return str_random(32);
});

$router->get('/get-films',['uses'=>'FilmApiController@index']);

$router->post('/rent-films',['uses'=>'FilmApiController@rentFilms']);

$router->post('/create-films',['uses'=>'FilmApiController@createFilm']);

$router->get('/points-client',['uses'=>'ClientRentApiController@index']);