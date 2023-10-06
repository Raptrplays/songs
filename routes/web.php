<?php

use App\Http\Controllers\Songcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/songs/index', [Songcontroller::class, 'index']);

Route::get('/songs/create', [Songcontroller::class, 'create']);

Route::get('/songs/{index}', [Songcontroller::class, 'show']);

Route::get('/songs/{index}/edit', [Songcontroller::class, 'edit']);

Route::post('store', [SongController::class, 'store']);

Route::put('edit/update/{id}', [SongController::class, 'update']);

Route::delete('delete/{index}', [Songcontroller::class, 'destroy']);

