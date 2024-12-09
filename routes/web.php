<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Sample Implementation Route
Route::get('/sample', function(){
    return view('testpage');
});