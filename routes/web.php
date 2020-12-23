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

$router->group(['prefix' => '/perwalian'], function () use ($router) {
    $router->get('/', 'PerwalianController@index');
    $router->get('/{id}', 'PerwalianController@find');
    $router->post('/', 'PerwalianController@create');
    $router->put('/{id}', 'PerwalianController@update');
    $router->delete('/{id}', 'PerwalianController@delete');
});

$router->group(['prefix' => '/krs'], function () use ($router) {
    $router->get('/', 'KrsController@index');
    $router->get('/{id}', 'KrsController@find');
    $router->post('/', 'KrsController@create');
    $router->put('/{id}', 'KrsController@update');
    $router->delete('/{id}', 'KrsController@delete');
});

$router->group(['prefix' => '/kurikulum'], function () use ($router) {
    $router->get('/', 'KurikulumController@index');
    $router->get('/{id}', 'KurikulumController@find');
    $router->post('/', 'KurikulumController@create');
    $router->put('/{id}', 'KurikulumController@update');
    $router->delete('/{id}', 'KurikulumController@delete');
});

$router->group(['prefix' => '/periode'], function () use ($router) {
    $router->get('/', 'PeriodeController@index');
    $router->get('/{id}', 'PeriodeController@find');
    $router->post('/', 'PeriodeController@create');
    $router->put('/{id}', 'PeriodeController@update');
    $router->delete('/{id}', 'PeriodeController@delete');
});

$router->group(['prefix' => '/unit'], function () use ($router) {
    $router->get('/', 'UnitController@index');
    $router->get('/{id}', 'UnitController@find');
    $router->post('/', 'UnitController@create');
    $router->put('/{id}', 'UnitController@update');
    $router->delete('/{id}', 'UnitController@delete');
});

$router->group(['prefix' => '/matakuliah'], function () use ($router) {
    $router->get('/', 'MatakuliahController@index');
    $router->get('/{id}', 'MatakuliahController@find');
    $router->post('/', 'MatakuliahController@create');
    $router->put('/{id}', 'MatakuliahController@update');
    $router->delete('/{id}', 'MatakuliahController@delete');
});

$router->group(['prefix' => '/pegawai'], function () use ($router) {
    $router->get('/', 'PegawaiController@index');
    $router->get('/{nip}', 'PegawaiController@find');
    $router->post('/', 'PegawaiController@create');
    $router->put('/{nip}', 'PegawaiController@update');
    $router->delete('/{nip}', 'PegawaiController@delete');
});

$router->group(['prefix' => '/mengajar'], function () use ($router) {
    $router->get('/', 'MengajarController@index');
    $router->get('/{id}', 'MengajarController@find');
    $router->post('/', 'MengajarController@create');
    $router->put('/{idkelas}', 'MengajarController@update');
    $router->delete('/{idkelas}', 'MengajarController@delete');
});

$router->group(['prefix' => '/transkrip'], function () use ($router) {
    $router->get('/', 'TranskripController@index');
    $router->get('/{id}', 'TranskripController@find');
    $router->post('/', 'TranskripController@create');
    $router->put('/{nangka}', 'TranskripController@update');
    $router->delete('/{idmk}', 'TranskripController@delete');
});

$router->group(['prefix' => '/perkuliahan'], function () use ($router) {
    $router->get('/', 'PerkuliahanController@index');
    $router->get('/{id}', 'PerkuliahanController@find');
    $router->post('/', 'PerkuliahanController@create');
    $router->put('/{idruang}', 'PerkuliahanController@update');
    $router->delete('/{idruang}', 'PerkuliahanController@delete');
});