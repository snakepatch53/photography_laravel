<?php

use App\Models\Contact;
use App\Models\Info;
use App\Models\Service;
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
    Route::get('/', function () {
        $info = Info::first();
        $contacts = Contact::all();
        $services = Service::all();
        return view('landing.home', compact('info', 'contacts', 'services'));
    })->name('home');
    // mapeo una variable get
    Route::get('/{service}', function (Service $service) {
        $info = Info::first();
        $contacts = Contact::all();
        $services = Service::all();
        return view('landing.service', compact('info', 'contacts', 'services', 'service'));
    })->name('service');
});
