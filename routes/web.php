<?php

use App\Http\Controllers\GenerateImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', GenerateImageController::class);
