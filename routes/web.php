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



Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/',function (){
        return view('admin/dashboard');
    });
    Route::get('dashboard','DashboardController@dashboard') ->name ('admin.dashboard');

    Route::resource('user','userController');
    Route::resource('tank','TankController');
    Route::resource('fish','fishController');
    Route::resource('medicine','MedicineController');
    Route::resource('feed','FeedController');
    Route::resource('equipment','EquipmentController');
    Route::resource('buy','BuyHistoryController');
    Route::resource('project','ProjectController');
    Route::resource('projectUser','ProjectUserController');
    Route::resource('projectTank','ProjectTankController');
    Route::resource('fishHealth','FishHealthController');
    Route::resource('medicineTank','MedicineTankController');
    Route::resource('feedTank','FeedTankController');
    Route::get('report/info','ReportController@info')->name('report.info');
    Route::get('report/details/{id}','ReportController@details')->name('report.details');
});



