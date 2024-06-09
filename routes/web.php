<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('category', [CategoryController::class, 'index'])->name('category.index'); // Read (List)
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create'); // Create Form
Route::post('category', [CategoryController::class, 'store'])->name('category.store'); // Store
Route::get('category/edit{id}', [CategoryController::class, 'edit'])->name('category.edit'); // Edit Form
Route::post('category/update{id}', [CategoryController::class, 'update'])->name('category.update'); // Update
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/cetak-pdf', [CategoryController::class, 'cetakPDF'])->name('category.cetak-pdf');
