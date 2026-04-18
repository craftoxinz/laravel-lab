<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Define GET route using a closure
Route::get('/me', function () {
    return 'Randie Syaeful Azahli';
});

// Define GET route with dynamic parameter
Route::get('/users/{id}', function (string $id) {
    return "User profile with id: $id";
});

// Define GET route with optional parameter
Route::get('/product/{slug?}', function (string $slug = 'new-products') {
    return "Show: $slug";
});

// Define GET route using view routes
Route::view('/test', 'test');

//
Route::get('/students', [StudentController::class, 'index']);
