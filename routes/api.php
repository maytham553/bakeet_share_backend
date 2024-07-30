<?php

use App\Http\Controllers\ShareDataController;
use Illuminate\Support\Facades\Route;

// Corrected route definition for the 'find' method
Route::get('/share-data/{id}', [ShareDataController::class, 'find']);

// Corrected route definition for the 'store' method
Route::post('/share-data', [ShareDataController::class, 'store']);
