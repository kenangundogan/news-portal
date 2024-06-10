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

Route::middleware('auth')->group(function () {

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

