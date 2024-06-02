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
    Route::group(['namespace' => 'Service', 'prefix' => 'services'], function () {
        Route::get('/', 'IndexController')->name('admin.service.index');
        Route::get('/create', 'CreateController')->name('admin.service.create');
        Route::post('/', 'StoreController')->name('admin.service.store');
        Route::get('/{service}', 'ShowController')->name('admin.service.show');
        Route::get('/{service}/edit', 'EditController')->name('admin.service.edit');
        Route::patch('/{service}', 'UpdateController')->name('admin.service.update');
        Route::delete('/{service}', 'DeleteController')->name('admin.service.delete');
    });
    Route::group(['namespace' => 'Record', 'prefix' => 'records'], function () {
        Route::get('/', 'IndexController')->name('admin.record.index');
        Route::get('/create', 'CreateController')->name('admin.record.create');
        Route::post('/', 'StoreController')->name('admin.record.store');
        Route::get('/{record}', 'ShowController')->name('admin.record.show');
        Route::get('/{record}/edit', 'EditController')->name('admin.record.edit');
        Route::patch('/{record}', 'UpdateController')->name('admin.record.update');
        Route::delete('/{record}', 'DeleteController')->name('admin.record.delete');
    });
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
