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

// $router->get('/mahasiswa', 'MahasiswaController@index');
// $router->get('/mahasiswa/{id}', 'MahasiswaController@find');
// $router->post('/mahasiswa', 'MahasiswaController@create');
// $router->put('/mahasiswa/{id}', 'MahasiswaController@update');
// $router->delete('/mahasiswa/{id}', 'MahasiswaController@delete');

$router->group(['prefix' => '/mahasiswa'], function () use ($router) {
    $router->get('/', 'MahasiswaController@index');
    $router->get('/{id}', 'MahasiswaController@find');
    $router->post('/', 'MahasiswaController@create');
    $router->put('/{id}', 'MahasiswaController@update');
    $router->delete('/{id}', 'MahasiswaController@delete');
});

$router->group(['prefix' => '/kelas'], function () use ($router) {
    $router->get('/', 'KelasController@index');
    $router->get('/{idkelas}', 'KelasController@find');
    $router->post('/', 'KelasController@create');
    $router->put('/{idkelas}', 'KelasController@update');
    $router->delete('/{idkelas}', 'KelasController@delete');
});