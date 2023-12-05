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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\Site\AboutController::class, 'index'])->name('about');
Route::get('gallery', [App\Http\Controllers\Site\GalleryController::class, 'index'])->name('gallery');
Route::get('contact', [App\Http\Controllers\Site\ContactController::class, 'index'])->name('contact');
Route::post('contact-store', [App\Http\Controllers\Site\ContactController::class, 'store'])->name('contact-store');
Route::get('profile', [App\Http\Controllers\Site\UserController::class, 'index'])->name('profile')->middleware('auth');
Route::put('profile-update/{id}', [App\Http\Controllers\Site\UserController::class, 'update'])->name('profile-update')->middleware('auth');

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
