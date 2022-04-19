<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('pages.home');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/dashboard-account', [App\Http\Controllers\DashboardSettingController::class, 'index'])
    ->name('dashboard-settings-account');
Route::post('/dashboard-account/{redirect}', [App\Http\Controllers\DashboardSettingController::class, 'update'])
    ->name('dashboard-settings-redirect');
    
Route::prefix()
->group(function(){
    Route::resource('/user', DashboardSettingController::class);
    
});
