<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Define GET route using a closure
Route::get('/me', function () {
    return 'Randie Syaeful Azahli';
});

Route::get('/users/{id}', function (string $id) {
    return "User profile with id: $id";
});
