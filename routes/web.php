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


Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });
    Route::group(['namespace' => 'Speciality', 'prefix' => 'specialities'], function () {
        Route::get('/', 'IndexController')->name('admin.speciality.index');
        Route::get('/create', 'CreateController')->name('admin.speciality.create');
        Route::post('/', 'StoreController')->name('admin.speciality.store');
        Route::get('/{speciality}', 'ShowController')->name('admin.speciality.show');
        Route::get('/{speciality}/edit', 'EditController')->name('admin.speciality.edit');
        Route::patch('/{speciality}', 'UpdateController')->name('admin.speciality.update');

    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
