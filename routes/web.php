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
Route::get('/home', 'HomeController@index')->name('home');

// Routes for authorized users
Route::group(['middleware'=>['auth']], function(){

    // HOME ROUTES
    Route::get('/mybee', 'HomeController@mybee')->name('mybee');

    // TASKS ROUTES
    Route::get('/todo', 'TaskController@todo')->name('todo');
    Route::post('/todo', 'TaskController@submitTask');
    Route::get('/todo/delete/{id}', 'TaskController@deleteTask')->name('delete_task');
    Route::get('/todo/update/{id}', 'TaskController@updateTask');

    // DIARY ROUTES
    Route::get('/diary', 'DiaryController@diary')->name('diary');
    Route::get('/diary/create_page', 'DiaryController@createArticlePage')->name('create_article_page');
    Route::get('/diary/delete/{id}', 'DiaryController@deleteArticle')->name('delete_article');
    Route::get('/diary/{id}', 'DiaryController@fullarticle')->name('fullarticle_{id}');
    Route::get('/diary/edit/{id}', 'DiaryController@editArticlePage');
    Route::post('/diary/edit', 'DiaryController@editArticle')->name('edit_article');
    Route::post('/diary/create_page/new', 'DiaryController@create')->name('new_article');

    // GALLERY ROUTES
    Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
    Route::get('/gallery/delete/{id}', 'GalleryController@deletePhoto');
    Route::post('/gallery', 'GalleryController@loadPhoto')->name('load_photo');

    // PROFILE ROUTES
    Route::get('/profile', 'ProfileController@profile')->name('profile');

    // LOGOUT ROUTE
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});