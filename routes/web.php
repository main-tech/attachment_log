<?php
use App\Http\Controllers\Auth\registerstdController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;

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
Route::middleware(['auth'])->group(function () {
   Route::get('/dashboard',[dashboardController::class,'index'])->name('dashboard');
   Route::post('/logout',[logoutController::class, 'store'])->name('logout');

   
});

Route::middleware(['guest'])->group(function () {
Route::get('/registerstd',[registerstdController::class, 'index'])->name('registerstd');
Route::post('/registerstd',[registerstdController::class, 'store']);   
Route::get('/login',[loginController::class, 'index'])->name('login');
Route::post('/login',[loginController::class, 'store']);
});




