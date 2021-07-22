<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/test/{id}', function ($id) {
    return $id;
})->where('id','[0-9]+');

//  Route::get('matter', 'App\Http\Controllers\MatterController@index');
//  Route::get('matter/{matter}', 'App\Http\Controllers\MatterController@show')->name('detail');
//  Route::post('matter/', 'App\Http\Controllers\MatterController@store')->name('add');
Auth::routes();

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/','App\Http\Controllers\MatterController@index');
    Route::resource('matters','App\Http\Controllers\MatterController');
    Route::post('matters/export','App\Http\Controllers\MatterController@export')->name('export');     
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');