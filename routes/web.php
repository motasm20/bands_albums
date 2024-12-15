<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bands', function () {
    return view('bands');
});
Route::get('/albums', function () {
    return view('albums');
});
