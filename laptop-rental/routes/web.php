<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaptopController;

Route::get('/laptops', [LaptopController::class, 'index']);

