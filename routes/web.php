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

    Route::group(['prefix' =>'profile'],function(){

        Route::get('/index',App\Http\Controllers\admin\ProfileController::class.'@index')->name('profile_index');
        Route::get('/edit/{id}',App\Http\Controllers\admin\ProfileController::class.'@edit')->name('profile_edit');
        Route::PUT('/update/{id}',App\Http\Controllers\admin\ProfileController::class.'@update')->name('profile_update');
    });


    Route::resource('homeslider', App\Http\Controllers\admin\HomesliderController::class);
    Route::resource('sponsor', App\Http\Controllers\admin\SponsorController::class);
    Route::resource('about', App\Http\Controllers\admin\AboutController::class);
    Route::delete('/delete/image/{id}',App\Http\Controllers\admin\AboutController::class.'@imagedelete')->name('about.imagedestroy');
    Route::resource('partner', App\Http\Controllers\admin\PartnerController::class);
    Route::resource('gallerycategory', App\Http\Controllers\admin\GallerycategoryController::class);
    Route::resource('gallery', App\Http\Controllers\admin\GalleryController::class);
    Route::resource('facilities', App\Http\Controllers\admin\FacilityController::class);



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
