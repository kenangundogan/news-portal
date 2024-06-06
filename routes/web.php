<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('theme-one.pages.main.index.default');
});

Route::get('/show', function () {
    return view('theme-one.pages.main.show.default');
});
