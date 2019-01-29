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

/**
 * Index routes
 */
Route::get('/', 'IndexController@index');

/**
 * Steps test
 */
Route::get('/steps', function () {
    return view('steps.steps');
});
