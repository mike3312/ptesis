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
    return view('welcome');
});

route::get('/links', function(){
	return'hola mundo';
});

route::resource('link', 'tesisController');
route::get('/link2', function(){	return'hola mundo';});
route::get('/link3', function(){	return'hola mundo';});
route::get('/link4', function(){	return'hola mundo';});