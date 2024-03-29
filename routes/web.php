<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('gallery');
    });
    Route::get('upload', function () {
        return view('upload');
    });
    Route::get('me', function () {
        return view('me');
    });
});