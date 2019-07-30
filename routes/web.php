<?php
Route::resource('/painel/produtos','Painel\ProdutoController');

Route::group(['namespace'=>'Site'], function(){
    Route::get('/categoria/{id}','SiteController@categoria')->middleware('auth');
    Route::get('/','SiteController@index');
    Route::get('/contato','SiteController@contato');
});