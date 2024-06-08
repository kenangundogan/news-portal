<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;


// Views ----------------------------------------------------------------
Route::get('/', function () {
    return view('theme-one.pages.main.index.default');
});

Route::get('/show', function () {
    return view('theme-one.pages.main.show.default');
});


// AUTH ----------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CMS ----------------------------------------------------------------

    Route::prefix('cms')->group(function () {
        Route::get('/', function () {
            return view('cms.pages.main.index.default');
        });
        Route::resource('categories', CategoryController::class);
        Route::resource('news', NewsController::class);
    });

});

require __DIR__.'/auth.php';

