<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});