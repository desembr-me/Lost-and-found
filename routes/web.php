<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->middleware('auth')->name('logout');

Route::middleware(['auth'])->group(
    function () {
        Route::resource('items', ItemController::class)->only(['index']);
        Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
        Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');
        Route::get('/reports/history', [ReportController::class, 'history'])->name('reports.history');

        Route::get('/claims/create/{report}', [ClaimController::class, 'create'])->name('claims.create');
        Route::post('/claims', [ClaimController::class, 'store'])->name('claims.store');

        Route::get('/profilelihat', [ProfileController::class, 'show'])->name('profile.show');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    }
);

Route::middleware(['auth', 'adminstaff'])->group(function () {
    Route::get('/reports/verify', [ReportController::class, 'verifyIndex'])->name('reports.verify.index');
    Route::patch('/reports/{id}/verify', [ReportController::class, 'verify'])->name('reports.verify');
    Route::patch('/reports/{id}/reject', [ReportController::class, 'reject'])->name('reports.reject');
    Route::get('/verifikasi-klaim', [ClaimController::class, 'verifikasiIndex'])->name('claims.verify');
    Route::post('/verifikasi-klaim/{id}', [ClaimController::class, 'verifikasiUpdate'])->name('claims.verify.update');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', UserController::class);
});
