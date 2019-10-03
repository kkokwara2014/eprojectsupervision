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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::post('/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'AdminController@index')->name('dashboard.index');

    Route::resource('/project', 'ProjectController');
    Route::get('/project/unallocated', 'ProjectController@unallocated')->name('project.unallocated');
    Route::resource('/classlevel', 'ClasslevelController');
    Route::resource('/chapter', 'ChapterController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/supervisor', 'SupervisorController');
    Route::resource('/department', 'DepartmentController');
    Route::resource('/allocation', 'AllocationController');
    Route::resource('/student', 'StudentController');
    Route::resource('/admin', 'AdminController');
    Route::get('/admins', 'AdminController@admins')->name('admin.admins');
    Route::post('admins/{id}/activate', 'AdminController@activate')->name('admin.activate');
    Route::post('admins/{id}/deactivate', 'AdminController@deactivate')->name('admin.deactivate');

    Route::get('user/profile','UserController@profileimage')->name('user.profile');
    Route::post('user/profile','UserController@updateprofileimage')->name('user.profile.update');

});



Route::get('/home', 'HomeController@index')->name('home');

