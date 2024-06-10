<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// CMS ----------------------------------------------------------------
use App\Http\Controllers\Cms\ImageController as CmsImageController;
use App\Http\Controllers\Cms\CategoryController as CmsCategoryController;
use App\Http\Controllers\Cms\NewsController as CmsNewsController;

// Theme One ----------------------------------------------------------------
use App\Http\Controllers\ThemeOne\NewsController as ThemeOneNewsController;
use App\Http\Controllers\ThemeOne\NewsCategoryController as ThemeOneNewsCategoryController;


// AUTH ----------------------------------------------------------------

Route::middleware('auth')->group(function () {

    // CMS ----------------------------------------------------------------


    Route::get('/cms', function () {
        return view('cms.pages.main.index.default');
    });
    Route::resource('cms/images', CmsImageController::class);
    Route::resource('cms/categories', CmsCategoryController::class);
    Route::resource('cms/news', CmsNewsController::class);


});


// Theme One ----------------------------------------------------------------

Route::get('/news/category/{category}', [ThemeOneNewsCategoryController::class, 'show'])
    ->where('category', '[a-z]+');
Route::get('/', [ThemeOneNewsController::class, 'index']);
Route::get('/news/{id}-{slug}', [ThemeOneNewsController::class, 'show'])
    ->where('id', '[0-9]+')
    ->where('slug', '[a-z0-9-]+');


require __DIR__.'/auth.php';

