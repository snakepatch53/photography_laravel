<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::group([], function () {
    Route::get('/', [LandingController::class, 'home'])->name('home');

    Route::get('services', [LandingController::class, 'services'])->name('services');

    Route::get('service/{service}', [LandingController::class, 'service'])->name('service');

    Route::get('contact', [LandingController::class, 'contact'])->name('contact');

    Route::get('products', [LandingController::class, 'products'])->name('products');

    Route::get('product/{product}', [LandingController::class, 'product'])->name('product');

    Route::get('blogs', [LandingController::class, 'blogs'])->name('blogs');

    Route::get('blog/{blog}', [LandingController::class, 'blog'])->name('blog');

    Route::get('video360', [LandingController::class, 'video360'])->name('video360');
});

Route::group(['prefix' => 'panel'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('services', ServiceController::class);

    Route::resource('contacts', ContactController::class);

    Route::resource('products', ProductController::class);

    Route::resource('videos', VideoController::class);

    Route::resource('blogs', BlogController::class);


    // Auth::routes();
});
