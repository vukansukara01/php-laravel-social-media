<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create form
Route::get('/register', [UserController::class, 'create']);

// Create new user
Route::post('/users', [UserController::class, 'store']);