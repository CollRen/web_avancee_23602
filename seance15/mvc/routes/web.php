<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@home');

Route::get('/client', 'ClientController@index');
Route::get('/client/show', 'ClientController@show');

Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');

Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');

Route::post('/client/delete', 'ClientController@delete');


Route::dispatch();
?>

