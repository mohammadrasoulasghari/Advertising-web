<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [indexController::class, 'index']);
// Route::get('/admin', [adminController::class, 'indexPage']);
Route::group(['prefix' => '/admin'], function () {
                 Route::get('/index', [adminController::class, 'indexPage'])->name('index.page');

                 //  create category
                 Route::get('/add-category', [adminController::class, 'addCategory'])->name('add.category');
                 Route::post('/create-category', [CategoryController::class, 'store'])->name('store.category');
                 //  create category
                 // show delete and delete category
                 Route::get('/delete-category', [adminController::class, 'ShowdeleteCategoryPage'])->name('edit.category');
                 Route::get('/delete-category/{category}', [CategoryController::class, 'storeDelete'])->name('store.delete.category');
                 // show delete and  delete category
                 // edit category
                 Route::get('/edit-category/{category}', [adminController::class, 'showEditCategoryPage'])->name('showEditPage');
                 Route::post('/update-category/{category}', [CategoryController::class, 'update'])->name('update.category');
                 // edit category

                 // ===================================

                 // create adversting
                 Route::get('/add-adversting', [adminController::class, 'addAdversting'])->name('add.adversting');
                 Route::post('/create-adversting', [AdvertisingController::class, 'store'])->name('store.adversting');
                 // create adversting
                 // delete adversting
                 Route::get('/delete-adversting', [adminController::class, 'showDeleteAdverstingPage'])->name('showDeleteAdverstingPage');
                 Route::get('/delete-advertising/{advertising}', [AdvertisingController::class, 'storeDelete'])->name('store.delete.advertising');

                 // delete adversting
                 // edit adversting
                 Route::get('/edit-adversting/{adversting}', [adminController::class, 'showEditAdverstingPage'])->name('showEditAdverstingPage');
                 Route::post('/update-adversting/{advertising}', [AdvertisingController::class, 'update'])->name('update.adversting');
                 // // edit adversting

});
Route::get('/dashboard', function () {
                 return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
                 Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                 Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                 Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
