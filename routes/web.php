<?php
Route::get('/',function(){
  return view ('welcome');
});
Route::get('hello','App\Http\Controllers\HelloController@index');
Route::get('hello/other','App\Http\Controllers\HelloController@other');