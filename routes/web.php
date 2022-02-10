<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\ItemController;
use App\Mail\welcomeMail;
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
Route::get('cats',[CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create'])->middleware(['auth','isAdmin','myage']);
Route::post('/cats/save', [CategoryController::class, 'save'])->name('categories.save');
Route::delete('/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/update',[CategoryController::class, 'update']);
Route::get('/email',function(){
  Mail::to('menaabdo076@gmail.com')->send(new welcomeMail());
   return new welcomeMail();
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
