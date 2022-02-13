
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/update', [CategoryController::class, 'updateapi']);
Route::post('/save', [CategoryController::class, 'saveapi']);
Route::get('/delete/{slug}', [CategoryController::class, 'deleteapi']);
Route::get('cats',[CategoryController::class, 'listapi'])->name('categories.list');