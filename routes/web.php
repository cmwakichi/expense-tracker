<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Models\category;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/category/create',[CategoryController::class,'create']);
Route::post('/categories',[CategoryController::class,'store']);
Route::get('/categories/{category:id}/edit',[CategoryController::class,'edit']);
Route::patch('/categories',[CategoryController::class,'update']);
Route::get('/expenses',[ExpenseController::class,'index']);
Route::get('/expenses/{expense}',[ExpenseController::class,'show']);
Route::get('/expense/create',[ExpenseController::class,'create']);
Route::post('/expenses',[ExpenseController::class,'store']);
Route::get('/expenses/{expense:id}/edit',[ExpenseController::class,'edit']);
Route::patch('/expenses/{expense:id}', [ExpenseController::class, 'update']);
