<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\AdvertisingController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [indexController::class, 'index']);
// Route::get('/admin', [adminController::class, 'indexPage']);
Route::group(['prefix' => '/admin'], function () {
                 Route::get('/index', [adminController::class, 'indexPage'])->name('index.page');

                 //  create category
                 Route::get('/add-category', [adminController::class, 'addCategory'])->name('add.category');
                 Route::post('/create-category', [CategoryController::class, 'store'])->name('store.category');
                 //  create category
                 // delete category
                 Route::get('/delete-category', [adminController::class, 'ShowdeleteCategoryPage'])->name('delete.category');
                 Route::get('/create-category/{category}', [CategoryController::class, 'storeDelete'])->name('store.delete.category');
                 // delete category
                 // edit category
                 Route::get('/edit-category/{category}', [adminController::class, 'showEditPage'])->name('showEditPage');
                 Route::post('/update-category/{category}', [CategoryController::class, 'update'])->name('update.category');
                 // edit category

                 // ===================================

                 // create adversting
                 Route::get('/add-adversting', [adminController::class, 'addAdversting'])->name('add.adversting');
                 Route::post('/create-adversting', [AdvertisingController::class, 'store'])->name('store.adversting');
                 // create adversting

                 // edit category
                 Route::get('/edit-adversting', [adminController::class, 'showEditAdverstingPage'])->name('showEditAdverstingPage');
                 // Route::post('/update-category/{category}', [CategoryController::class, 'update'])->name('update.category');
                 // // edit category

});

Route::get('test', function () {
                 return view('panel-admin.delete-category');
});
