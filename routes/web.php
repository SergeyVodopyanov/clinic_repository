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



Route::group(['namespace' => 'Patient', 'prefix' => 'patient'], function () {

    Route::group(['namespace' => 'Account', 'prefix' => 'account'], function () {
        Route::get('/', 'IndexController')->name('patient.account.index');
        Route::get('/{patient}/edit', 'EditController')->name('patient.account.edit');
        Route::patch('/{patient}', 'UpdateController')->name('patient.account.update');
    });

    Route::group(['namespace' => 'Record', 'prefix' => 'records'], function () {
        Route::get('/', 'IndexController')->name('patient.record.index');
        Route::get('/create', 'CreateController')->name('patient.record.create');
        Route::post('/', 'StoreController')->name('patient.record.store');
        //Route::get('/{record}/edit', 'EditController')->name('patient.record.edit');
        //Route::patch('/{record}', 'UpdateController')->name('patient.record.update');
    });
    Route::group(['namespace' => 'Record2', 'prefix' => 'records2'], function () {
        Route::get('/', 'IndexController')->name('patient.record2.index');
        Route::get('/create', 'CreateController')->name('patient.record2.create');
        Route::post('/', 'StoreController')->name('patient.record2.store');
    });
    Route::group(['namespace' => 'Record3', 'prefix' => 'records3'], function () {
        Route::get('/', 'IndexController')->name('patient.record3.index');
        Route::get('/create', 'CreateController')->name('patient.record3.create');
        Route::post('/', 'StoreController')->name('patient.record3.store');
    });
    Route::group(['namespace' => 'Record4', 'prefix' => 'records4'], function () {
        Route::get('/', 'IndexController')->name('patient.record4.index');
        Route::get('/create', 'CreateController')->name('patient.record4.create');
        Route::post('/', 'StoreController')->name('patient.record4.store');
    });

});



Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
        Route::get('/', 'IndexController');
    });

    Route::group(['namespace' => 'Account', 'prefix' => 'account'], function () {
        Route::get('/', 'IndexController')->name('admin.account.index');
        Route::get('/{admin}/edit', 'EditController')->name('admin.account.edit');
        Route::patch('/{admin}', 'UpdateController')->name('admin.account.update');
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
    Route::group(['namespace' => 'Schedule', 'prefix' => 'schedules'], function () {
        Route::get('/', 'IndexController')->name('admin.schedule.index');
        Route::get('/create', 'CreateController')->name('admin.schedule.create');
        Route::post('/', 'StoreController')->name('admin.schedule.store');
        Route::get('/{schedule}', 'ShowController')->name('admin.schedule.show');
        Route::get('/{schedule}/edit', 'EditController')->name('admin.schedule.edit');
        Route::patch('/{schedule}', 'UpdateController')->name('admin.schedule.update');
        Route::delete('/{schedule}', 'DeleteController')->name('admin.schedule.delete');
    });
    Route::group(['namespace' => 'Doctor', 'prefix' => 'doctors'], function () {
        Route::get('/', 'IndexController')->name('admin.doctor.index');
        Route::get('/create', 'CreateController')->name('admin.doctor.create');
        Route::post('/', 'StoreController')->name('admin.doctor.store');
        Route::get('/{doctor}', 'ShowController')->name('admin.doctor.show');
        Route::get('/{doctor}/edit', 'EditController')->name('admin.doctor.edit');
        Route::patch('/{doctor}', 'UpdateController')->name('admin.doctor.update');
        Route::delete('/{doctor}', 'DeleteController')->name('admin.doctor.delete');
    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'admins'], function () {
        Route::get('/', 'IndexController')->name('admin.admin.index');
        Route::get('/create', 'CreateController')->name('admin.admin.create');
        Route::post('/', 'StoreController')->name('admin.admin.store');
        Route::get('/{admin}', 'ShowController')->name('admin.admin.show');
        Route::get('/{admin}/edit', 'EditController')->name('admin.admin.edit');
        Route::patch('/{admin}', 'UpdateController')->name('admin.admin.update');
        Route::delete('/{admin}', 'DeleteController')->name('admin.admin.delete');
    });





    Route::group(['namespace' => 'Record', 'prefix' => 'records'], function () {
        Route::get('/', 'IndexController')->name('admin.record.index');
        Route::get('/create', 'CreateController')->name('admin.record.create');
        Route::post('/', 'StoreController')->name('admin.record.store');
        Route::get('/{record}/edit', 'EditController')->name('admin.record.edit');
        Route::patch('/{record}', 'UpdateController')->name('admin.record.update');
    });
    Route::group(['namespace' => 'Record2', 'prefix' => 'records2'], function () {
        Route::get('/', 'IndexController')->name('admin.record2.index');
        Route::get('/create', 'CreateController')->name('admin.record2.create');
        Route::post('/', 'StoreController')->name('admin.record2.store');
    });
    Route::group(['namespace' => 'Record3', 'prefix' => 'records3'], function () {
        Route::get('/', 'IndexController')->name('admin.record3.index');
        Route::get('/create', 'CreateController')->name('admin.record3.create');
        Route::post('/', 'StoreController')->name('admin.record3.store');
    });
    Route::group(['namespace' => 'Record4', 'prefix' => 'records4'], function () {
        Route::get('/', 'IndexController')->name('admin.record4.index');
        Route::get('/create', 'CreateController')->name('admin.record4.create');
        Route::post('/', 'StoreController')->name('admin.record4.store');
    });

});

/* Были вот эти роуты
Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
А стали эти:*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/home', 'IndexController')->name('home');
    Route::post('/logout', 'LogoutController')->name('my_logout');
});
//Route::get('/home', 'App\Http\Controllers\Main\IndexController')->name('home');



