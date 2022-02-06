<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/cats',[CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
Route::get('/cats/save', [CategoryController::class, 'save'])->name('categories.save');
Route::get('/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/update',[CategoryController::class, 'update']);
Route::get('/show',[ItemController::class, 'show']);
Route::get('/showitem/{id}',[ItemController::class, 'showItem']);