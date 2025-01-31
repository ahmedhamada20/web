<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
   Route::get('/', [HomeController::class, 'index'])->name('home');
   Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');
   Route::get('/our-partners', [HomeController::class, 'ourPartners'])->name('ourPartners');
   Route::get('/our-clients', [HomeController::class, 'ourClients'])->name('ourClients');
   Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
   Route::get('service-details/{id}', [HomeController::class, 'serviceDetails'])->name('serviceDetails');

});
