<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;
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


Route::get('/',[LoginController::class, 'loginpage'])->name('login');
Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('/landing-page', [LandingController::class, 'landingpage']);
Route::get('/work-detail/{id}', [LandingController::class, 'detail']);
Route::get('/about', [LandingController::class, 'about']);


Route::middleware(['auth'])->group(function () {
      
    Route::get('/home',[PortofolioController::class, 'beranda'])->name('home');
    Route::post('/upload', [PortofolioController::class, 'store'])->name('store'); 
    Route::get('/portfolio_upload', [PortofolioController::class, 'upload']);
    Route::get('/portfolio_edit', [PortofolioController::class,'index']);
    Route::post('/update-portfolio', [PortofolioController::class, 'updatePortfolio']);
    Route::post('/delete-portfolio/{id}', [PortofolioController::class, 'deletePortfolio']);
});
