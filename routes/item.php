<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;



Route::get('/show',[ItemController::class, 'show']);
Route::get('/showitem/{id}',[ItemController::class, 'showItem']);