<?php


Route::get('/', function () {
    $medium = resolve('medium-php-sdk');
    dd($medium);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('admin')->prefix('admin')->group(function(){
 Route::get('/', function() {
 	dd('Route was reach');
 });   
  
});

Route::post('pay/{plan}', 'PaymentsController@pay')->name('pay');