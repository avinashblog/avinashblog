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
    return view('shop.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' => 'admin/','as'=>'admin'],function () {
    Route::get('welcome', 'DashboardController@index');
    Route::get('user_list', 'DashboardController@users');
    Route::get('blockUserId/{id}', 'DashboardController@blockUser');
    Route::get('showBusinessByUserId/{id}', 'DashboardController@showUserBusines');
    
});
