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

/*
|--------------------------------------------------------------------------
| Admin panel
|--------------------------------------------------------------------------
*/

Route::resource('team','App\Http\Controllers\TeamController');
Route::resource('news','App\Http\Controllers\NewsController');
Route::post('/upload', 'App\Http\Controllers\NewsController@upload');

/*
|--------------------------------------------------------------------------
| Change language
|--------------------------------------------------------------------------
*/

Route::get('setlocale/{lang}', function ($lang) {
    Cookie::queue('lang', $lang);

    return redirect()->back();
})->name('setlocale');
