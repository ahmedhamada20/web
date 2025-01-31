<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ChooseEbrightController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

Route::get('/',[AdminController::class,'index'])->name('admin');
Route::get('/setting',[AdminController::class,'setting'])->name('admin.setting');
Route::post('/setting/updated',[AdminController::class,'setting_updated'])->name('admin.setting_updated');
Route::resource('sliders',SliderController::class);
Route::resource('choose_ebright',ChooseEbrightController::class);
Route::resource('service',ServiceController::class);
