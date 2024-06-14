<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// CMS ----------------------------------------------------------------
use App\Http\Controllers\Cms\UserController as UserController;
use App\Http\Controllers\Cms\ImageController as CmsImageController;
use App\Http\Controllers\Cms\CategoryController as CmsCategoryController;
use App\Http\Controllers\Cms\NewsController as CmsNewsController;

// Theme One ----------------------------------------------------------------
use App\Http\Controllers\ThemeOne\NewsController as ThemeOneNewsController;


// AUTH ----------------------------------------------------------------

Route::middleware('auth')->group(function () {

    // CMS ----------------------------------------------------------------

    Route::prefix('/cms/users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
        Route::put('/{user}/updatepassword', [UserController::class, 'updatepassword'])->name('users.updatepassword');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::get('/cms', [ThemeOneNewsController::class, 'main']);
    Route::resource('cms/images', CmsImageController::class);
    Route::resource('cms/categories', CmsCategoryController::class);
    Route::resource('cms/news', CmsNewsController::class);


});


// Theme One ----------------------------------------------------------------

Route::get('/', [ThemeOneNewsController::class, 'index']);
Route::get('/news/category/{category}', [ThemeOneNewsController::class, 'category'])
    ->where('category', '[a-z]+');
Route::get('/search', [ThemeOneNewsController::class, 'search'])->name('search')
    ->where('category', '[a-z]+');
Route::get('/news/{id}-{slug}', [ThemeOneNewsController::class, 'show'])
    ->where('id', '[0-9]+')
    ->where('slug', '[a-z0-9-]+');

require __DIR__.'/auth.php';

