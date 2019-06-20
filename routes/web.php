<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'films'
],function () {
    $controller = 'FilmsController';
    Route::get('/search', $controller.'@index');
    Route::get('/{id}', $controller.'@find');
});


Route::group([
    'prefix' => 'people'
],function () {
    $controller = 'PeopleController';
    Route::get('/search', $controller.'@index');
    Route::get('/{id}', $controller.'@find');
});
