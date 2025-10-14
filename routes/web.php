<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('default');
});

Route::get('/asset/', function () {
    header(header: "Content-Type: text/plain");
    return view('assets.asset');
});

Route::get('/asset/BodyColors.ashx', function () {
    return view('assets.bodycolors');
});

Route::get('/asset/test', function () {
    return view('assets.test');
});