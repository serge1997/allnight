<?php

use Illuminate\Support\Facades\Route;
use App\Views\Auth\RegisterView;
use App\Views\Auth\LoginView;
use App\Views\Auth\RegisterEstablishmentView;
use App\Views\Establishment\DashboardView;
use App\Http\Controllers\AuthController;
use App\Views\IndexView;
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

Route::get('/', [IndexView::class, 'index']);

Route::get('/register', [RegisterView::class, 'index'])->name('auth.register')->middleware('guest');
Route::get('/login', [LoginView::class, 'index'])->name('login')->middleware('guest');
Route::get('/register-restaurant', [RegisterEstablishmentView::class, 'index'])->name('auth.establishment-register');

Route::post('/login', [AuthController::class, 'login'])->name('sign.in');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth:establishment'])->group(function() {
    Route::get('/est/dashboard', [DashboardView::class, 'index'])->name('est.dashboard');
});
