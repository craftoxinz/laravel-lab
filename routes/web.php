<?php

use App\Http\Controllers\LectureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/students');

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

// Define GET route using controller
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/produk', [ProductController::class, 'index']);

Route::get('/show-produk', [ProductController::class, 'show']);

Route::get('/view-produk', [ProductController::class, 'view']);

Route::get('/lectures', [LectureController::class, 'index']);

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{student}/update', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
