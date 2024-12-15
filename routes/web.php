<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutUsController;

Route::get('/', function () {
    return view('index');  // Returns index.blade.php
});

// Route for the tours page
Route::get('/tours', function () {
    return view('tours');  // Returns tours.blade.php
});
Route::get('/packages', function () {
    return view('packages'); // This will return the packages.blade.php view directly
});
Route::get('/packages', [PackageController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);

// Route for the About Us page
Route::get('/about', [AboutUsController::class, 'index']);


