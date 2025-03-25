<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    // Recupero i primi 3 post ordinati per data di pubblicazione (dal più recente)
    $posts = Post::orderBy('published_at', 'desc')->limit(3)->get();
    //uso la funzione map per accorciare il testo della descrizione dei progetti 
    $posts->map(function ($post) {
        $post->content = Str::words($post->content, 6, '...');
        return $post;
    });
    return view('dashboard', compact('posts'));
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


//rerource controller CRUD
Route::resource('posts', PostController::class)->middleware(['auth', 'verified']);
require __DIR__ . '/auth.php';
