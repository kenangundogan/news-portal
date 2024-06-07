<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;


// CMS ----------------------------------------------------------------

Route::prefix('cms')->group(function () {
    Route::get('/', function () {
        return view('cms.pages.main.index.default');
    });
    Route::resource('categories', CategoryController::class);
    Route::resource('news', NewsController::class);
});



// // Views ----------------------------------------------------------------
Route::get('/', function () {
    return view('theme-one.pages.main.index.default');
});

Route::get('/show', function () {
    return view('theme-one.pages.main.show.default');
});
