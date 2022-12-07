<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Auth routes
|--------------------------------------------------------------------------
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Main navigation
|--------------------------------------------------------------------------
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('all_news',"App\Http\Controllers\NewsController@viewAll")->name('all_news');
Route::get('/news/{id}',"App\Http\Controllers\NewsController@show")->name('news.show');
Route::get('/gallery','App\Http\Controllers\GalleryController@getGallery')->name('gallery');
Route::get('/resources/{type}','App\Http\Controllers\ResourceController@getResources')->name('resources');

/*
|--------------------------------------------------------------------------
| Admin panel
|--------------------------------------------------------------------------
*/

Route::resource('team','App\Http\Controllers\TeamController')->middleware('auth');
Route::get('/news',"App\Http\Controllers\NewsController@index")->name('news.index')->middleware('auth');
Route::get('/news/create',"App\Http\Controllers\NewsController@create")->name('news.create')->middleware('auth');
Route::post('/news',"App\Http\Controllers\NewsController@store")->name('news.store')->middleware('auth');
Route::get('/news/{id}/edit',"App\Http\Controllers\NewsController@edit")->name('news.edit')->middleware('auth');
Route::put('/news/{id}',"App\Http\Controllers\NewsController@update")->name('news.update')->middleware('auth');
Route::delete('/news/{id}',"App\Http\Controllers\NewsController@destroy")->name('news.destroy')->middleware('auth');
//Route::resource('news','App\Http\Controllers\NewsController')->middleware('auth');
Route::post('/upload', 'App\Http\Controllers\NewsController@upload')->middleware('auth');
Route::resource('photos','App\Http\Controllers\GalleryController')->middleware('auth');
Route::resource('resource','App\Http\Controllers\ResourceController')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Change language
|--------------------------------------------------------------------------
*/

Route::get('setlocale/{lang}', function ($lang) {
    Cookie::queue('lang', $lang);

    return redirect()->back();
})->name('setlocale');
