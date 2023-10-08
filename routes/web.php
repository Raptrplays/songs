<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Albumcontroller;
use App\Http\Controllers\Bandcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/index', [HomeController::class, 'index']);            // Index
Route::get('/album/create', [Albumcontroller::class, 'create']);      // Create Form
Route::post('/album/store', [Albumcontroller::class, 'store']);             // Store
Route::get('/album/{id}', [Albumcontroller::class, 'show']);          // Show
Route::get('/album/{id}/edit', [Albumcontroller::class, 'edit']);     // Edit Form
Route::put('/album/{id}', [Albumcontroller::class, 'update']);         // Update
Route::delete('/album/{id}', [Albumcontroller::class, 'destroy']);    // Delete

Route::get('/band/create', [Bandcontroller::class, 'create']);      // Create Form
Route::post('/band/store', [Bandcontroller::class, 'store']);             // Store
Route::get('/band/{id}', [Bandcontroller::class, 'show']);          // Show
Route::get('/band/{id}/edit', [Bandcontroller::class, 'edit']);     // Edit Form
Route::put('/band/{id}', [Bandcontroller::class, 'update']);         // Update
Route::delete('/band/{id}', [Bandcontroller::class, 'destroy']);    // Delete




