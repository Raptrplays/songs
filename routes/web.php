<?php

use App\Http\Controllers\Songcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/songs', [Songcontroller::class, 'index']);

Route::get('/songs/create', [Songcontroller::class, 'create']);

Route::get('/songs/{index}', [Songcontroller::class, 'show']);

Route::get('/songs/{index}/edit', [Songcontroller::class, 'edit']);



