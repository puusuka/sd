<?php
Route::get('/',function(){
  return view ('welcome');
});
Route::get('hello','App\Http\Controllers\HelloController@index');
Route::post('hello','App\Http\Controllers\HelloController@post');
