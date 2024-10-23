<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [FrontendController::class, 'indextow']);
Route::get('/showallproduct', [FrontendController::class, 'showallproduct']);

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/addproduct', [ProductController::class, 'addproduct']);
    Route::get('/allproduct', [ProductController::class, 'allproduct'])->name('allproduct');
    Route::post('/store', [ProductController::class, 'store']);

    Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);
    Route::put('/updateproduct/{id}', [ProductController::class, 'updateproduct']);
    Route::delete('deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
