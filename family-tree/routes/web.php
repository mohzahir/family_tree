<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\UserFamilyCheckMiddleware;
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

Route::get('/', [FrontendController::class, 'showHome'])->name('family.home');
Route::get('/family-member', [FrontendController::class, 'showFamilyMember'])->name('family.member');
Route::get('/family-members', [FrontendController::class, 'showFamilyMembers'])->name('family.members');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('family', FamilyController::class);
    Route::resource('person', PersonController::class);
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
});
