<?php

use App\Http\Controllers\GenerateBlogPostController;
use App\Http\Controllers\GenerateImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', GenerateImageController::class);
Route::get('/blogpost', GenerateBlogPostController::class);
