<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.team');
});


Route::get('/home',HomeController::class.'@index')->name('home');
Route::get('/about-us',HomeController::class.'@about')->name('about');
Route::get('/karken',HomeController::class.'@karken')->name('karken');
Route::get('/our-facilites',HomeController::class.'@facilites')->name('facilites');
Route::get('/our-team',HomeController::class.'@team')->name('team');
Route::get('/gallery',HomeController::class.'@gallery')->name('gallery');
Route::get('/contact',HomeController::class.'@contact')->name('contact');
Route::get('/blog',HomeController::class.'@blog')->name('blog');

Route::group(['prefix' => 'admin', ['middleware' => 'authadmin']], function () {
    Route::get('/dashboard',DashboardController::class.'@index')->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');