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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin');
    Route::get('/projects', 'Admin\ProjectsController@index')->name('admin-projects');
    Route::get('/projects/create', 'Admin\ProjectsController@create')->name('admin-projects-create');
    Route::get('/categories', 'Admin\CategoriesController@index')->name('admin-categories');
    Route::get('/categories/create', 'Admin\CategoriesController@create')->name('admin-categories-create');
    Route::post('/categories/store', 'Admin\CategoriesController@store')->name('admin-categories-store');
    Route::get('/project-years', 'Admin\ProjectYearsController@index')->name('admin-project-years');
    Route::get('/project-years/create', 'Admin\ProjectYearsController@create')->name('admin-project-years-create');
    Route::post('/project-years/store', 'Admin\ProjectYearsController@store')->name('admin-project-years-store');
    Route::get('/gallery/{id}', 'Admin\GalleryController@getImages')->name('admin-project-gallery');
    Route::post('/gallery/{id}/upload', 'Admin\GalleryController@uploadFile')->name('admin-project-gallery-upload');
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

