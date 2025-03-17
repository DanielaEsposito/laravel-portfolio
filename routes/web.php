<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//raggruppo tutte le rotte per la parte di amministrazione in modo che abbiano 
//MIDDLEWARE [AUTH, VERIFIED], NAME  delle rotte che inizieranno con admin
//PREFIX, tutti gli url inizieranno con /admin
Route::middleware(['auth', 'verified'])
    ->name('admin.') //es: admin.index
    ->prefix('admin')
    ->group(function () {
        //tutte le rotte che devono aver ele caratteristiche sopra citate 
        Route::get('/index', [DashboardController::class, 'index'])
            ->name('index');
    });
require __DIR__ . '/auth.php';
