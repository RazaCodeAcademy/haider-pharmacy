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

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

    Route::prefix('admin')->namespace('Backend')->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

        // categories routes
        Route::prefix('categories')->group(function () {
            Route::get('/', 'CategoryController@getAllCategories')->name('categories.getAllCategories');
            Route::get('/create', 'CategoryController@createCategory')->name('categories.createCategory');
            Route::post('/save_category', 'CategoryController@saveCategory')->name('categories.saveCategory');
        });
    });

/*-----------------------------------END---------------------------------*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
