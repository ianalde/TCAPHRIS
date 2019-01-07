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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('/dashboard', 'DashboardController@store');
    Route::put('/dashboard/{id}', 'DashboardController@update');
    Route::get('/daily-time-records', 'DtrController@index')->name('dtr');
    Route::get('/team-schedule', 'TeamScheduleController@index')->name('team-schedule');

    Route::get('/departments', 'DepartmentController@index')->name('departments');
    Route::get('/departments/create', 'DepartmentController@create');
    Route::post('/department', 'DepartmentController@store');
    Route::get('/departments/{department}/edit', 'DepartmentController@edit')->name('edit');
    Route::patch('/departments/{department}', 'DepartmentController@update');
    Route::delete('/departments/{department}', 'DepartmentController@destroy');

    Route::get('/teams', 'TeamController@index')->name('teams');
    Route::get('/teams/create', 'TeamController@create');
    Route::post('/teams', 'TeamController@store');
    Route::get('/teams/{team}/edit', 'TeamController@edit');
    Route::patch('/teams/{team}', 'TeamController@update');
    Route::delete('/teams/{team}', 'TeamController@destroy');
});