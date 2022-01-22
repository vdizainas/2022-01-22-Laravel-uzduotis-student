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

Route::prefix('student')->group(function() {
    Route::get('', 'App\Http\Controllers\StudentController@index')->name('student.index');
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create');
    Route::post('store', 'App\Http\Controllers\StudentController@store')->name('student.store');
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit');
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update');
    Route::post('destroy/{student}', 'App\Http\Controllers\StudentController@destroy')->name('student.destroy');
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show');
});

Route::prefix('attendance_group')->group(function() {
    Route::get('', 'App\Http\Controllers\AttendanceGroupController@index')->name('attendance_group.index');
    Route::get('create', 'App\Http\Controllers\AttendanceGroupController@create')->name('attendance_group.create');
    Route::post('store', 'App\Http\Controllers\AttendanceGroupController@store')->name('attendance_group.store');
    Route::get('edit/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@edit')->name('attendance_group.edit');
    Route::post('update/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@update')->name('attendance_group.update');
    Route::post('destroy/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@destroy')->name('attendance_group.destroy');
    Route::get('show/{attendance_group}', 'App\Http\Controllers\AttendanceGroupController@show')->name('attendance_group.show');
});

Route::prefix('school')->group(function() {
    Route::get('', 'App\Http\Controllers\SchoolController@index')->name('school.index');
    Route::get('create', 'App\Http\Controllers\SchoolController@create')->name('school.create');
    Route::post('store', 'App\Http\Controllers\SchoolController@store')->name('school.store');
    Route::get('edit/{school}', 'App\Http\Controllers\SchoolController@edit')->name('school.edit');
    Route::post('update/{school}', 'App\Http\Controllers\SchoolController@update')->name('school.update');
    Route::post('destroy/{school}', 'App\Http\Controllers\SchoolController@destroy')->name('school.destroy');
    Route::get('show/{school}', 'App\Http\Controllers\SchoolController@show')->name('school.show');
});