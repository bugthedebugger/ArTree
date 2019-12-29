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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin');
    Route::get('/projects', 'Admin\ProjectsController@index')->name('admin-projects');
    Route::get('/projects/create', 'Admin\ProjectsController@create')->name('admin-projects-create');
});


Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::get('/about', function(){
    return view('about');
});

Route::get('/bio', function(){
    return view('bio');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/projects', function(){
    return view('projects');
});

