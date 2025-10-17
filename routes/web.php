<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('default');
});

Route::get('/asset/', function () {
    $contents = view('assets.asset');
    return response($contents)->header('Content-Type', 'text/plain');
});

Route::get('/asset/BodyColors.ashx', function () {
    return view('assets.bodycolors');
});

Route::get('/asset/test', function () {
    return view('assets.RCCWork');
});

Route::get('/asset/RenderH', function () {
    return view('assets.HeadRendering');
});