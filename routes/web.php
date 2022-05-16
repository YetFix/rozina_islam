<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/news', function () {
    return view('frontend.news');
});
Route::get('/blogs', function () {
    return view('frontend.blogs');
});

Route::get('/awards', function () {
    return view('frontend.awards');
});
Route::get('/certificates', function () {
    return view('frontend.awards');
});
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('single');
Route::get('/post', function () {
    return view('frontend.blog');
})->name('single_news');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
