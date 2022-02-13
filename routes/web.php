<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\ItemController;
use App\Mail\welcomeMail;
use App\Models\Category;
use Auth;
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
//Route::delete('/delete/{slug}', [CategoryController::class, 'delete']);
Route::put('/edit/{id}', [CategoryController::class, 'edit']);
Route::get('/update',[CategoryController::class, 'update']);
Route::get('/email',function(){
  Mail::to('menaabdo076@gmail.com')->send(new welcomeMail());
   return new welcomeMail();
});
Route::post('/delete/{category}',function( Category $category ){

    
    return view('category.createitem',['c'=>$category->name]);
   
    //return view('category.create');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();
Route::get('/template', [CategoryController::class, 'list'])->name('categories.list');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
