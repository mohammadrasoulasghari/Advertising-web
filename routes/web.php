<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\indexController;

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
                 Route::get('/index', [adminController::class, 'indexPage']);
});

// Route::get('test', function () {
//     dd(Category::all());
// });
