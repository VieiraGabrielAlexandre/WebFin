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
Route::any('/any',function(){
    return 'any';
});

Route::match(['get','post'],'/match',function (){
    return 'testando match';
});

Route::get('/', function () {
    return view('welcome');
})->name('BemVindo');

Route::get ('/empresa',function(){
    return view('empresa');
});

Route::get('/inicial', function () {
    return redirect()->route('BemVindo');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lista', 'ClienteController@lista')->name('cliente.lista');

