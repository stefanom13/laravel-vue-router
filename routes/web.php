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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')
    ->middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('post','PostController');

});

// front-office

// metodo piu complesso

// Route::get('{any?}',function (){
//     return view('guest.home');
// })->where('any','.*');

// metodo alternativo fallback
Route::fallback(function (){
    return view('guest.home');
});