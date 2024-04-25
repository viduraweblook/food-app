<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FoodController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

//indexPages
Route::get('/customer', [CustomerController::class, 'index'])->name('customerview')->middleware(['auth']);
Route::get('/food', [FoodController::class,'index'])->name('foodview')->middleware(['auth']);
//createFormPages
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::get('/food/create',[FoodController::class,'create']);
//Save and  Store
Route::post('/customer/save', [CustomerController::class, 'store']);
Route::post('/food/save', [FoodController::class, 'store']);
});
//indexPages
// Route::get('/customer', [CustomerController::class, 'index'])->name('customerview')->middleware(['auth']);
// Route::get('/food', [FoodController::class, 'index'])->name('foodview')->middleware(['auth']);


