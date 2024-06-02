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
        Route::delete('/{speciality}', 'DeleteController')->name('admin.speciality.delete');
    });
    Route::group(['namespace' => 'Patient', 'prefix' => 'patients'], function () {
        Route::get('/', 'IndexController')->name('admin.patient.index');
        Route::get('/create', 'CreateController')->name('admin.patient.create');
        Route::post('/', 'StoreController')->name('admin.patient.store');
        Route::get('/{patient}', 'ShowController')->name('admin.patient.show');
        Route::get('/{patient}/edit', 'EditController')->name('admin.patient.edit');
        Route::patch('/{patient}', 'UpdateController')->name('admin.patient.update');
        Route::delete('/{patient}', 'DeleteController')->name('admin.patient.delete');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
