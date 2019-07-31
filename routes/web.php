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

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();

Route::get('/', 'Web\AppController@getApp')
    ->middleware('auth');
Route::get('redis', function () {
    \Redis::set('name','niko');
    //return \App\Utilities\GaodeMaps::geocodeAddress('天城路1号', '杭州', '浙江');
});
Route::get('test','\App\Http\Controllers\Web\TestController@test');
Route::get('/cafe/{id}', 'API\CafesController@getCafe');
