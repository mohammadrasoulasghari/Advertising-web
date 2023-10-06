<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckPermissionAdmin;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\AdvertisingController;
use App\Http\Controllers\order\CheckOutController;
use App\Http\Controllers\user\AdvertisinfUserController;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

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







Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('advertisings', [indexController::class, 'showAdvertisings'])->name('showAdvertisings'); // Route::get('/admin', [adminController::class, 'indexPage']);
Route::prefix('/admin')->middleware([CheckPermissionAdmin::class])->group(function () {
                 Route::get('/index', [AdminController::class, 'indexPage'])->name('index.page');

                 //  create category
                 Route::get('/add-category', [AdminController::class, 'addCategory'])->name('add.category');
                 Route::post('/create-category', [CategoryController::class, 'store'])->name('store.category');
                 //  create category
                 // show delete and delete category
                 Route::get('/delete-category', [AdminController::class, 'ShowdeleteCategoryPage'])->name('edit.category');
                 Route::get('/delete-category/{category}', [CategoryController::class, 'storeDelete'])->name('store.delete.category');
                 // show delete and  delete category
                 // edit category
                 Route::get('/edit-category/{category}', [AdminController::class, 'showEditCategoryPage'])->name('showEditPage');
                 Route::post('/update-category/{category}', [CategoryController::class, 'update'])->name('update.category');
                 // edit category

                 // ===================================

                 // create adversting
                 Route::get('/add-adversting', [AdminController::class, 'addAdversting'])->name('add.adversting');
                 Route::post('/create-adversting', [AdvertisingController::class, 'store'])->name('store.adversting');
                 // create adversting
                 // delete adversting
                 Route::get('/delete-adversting', [AdminController::class, 'showDeleteAdverstingPage'])->name('showDeleteAdverstingPage');
                 Route::get('/delete-advertising/{advertising}', [AdvertisingController::class, 'storeDelete'])->name('store.delete.advertising');

                 // delete adversting
                 // edit adversting
                 Route::get('/edit-adversting/{adversting}', [AdminController::class, 'showEditAdverstingPage'])->name('showEditAdverstingPage');
                 Route::post('/update-adversting/{advertising}', [AdvertisingController::class, 'update'])->name('update.adversting');
                 // // edit adversting

                 // list for users

                 // show
                 Route::get('/list-users', [AdminController::class, 'listUsers'])->name('list.users');
                 // show

                 // delete
                 Route::get('/delete-users/{user}', [UserController::class, 'delete'])->name('delete.users');
                 // delete

                 // edit user
                 Route::get('/edit-user/{user}', [AdminController::class, 'showEditUsersPage'])->name('showEditPage');
                 Route::post('/update-user/{user}', [UserController::class, 'update'])->name('update.user');
                 // // edit user
});



Route::middleware('auth')->group(function () {
                 // index
                 Route::get('/profile', [UserController::class, 'index'])->name('profile.index');
                 // index

                 // crete advertising for user
                 Route::get('/advertising/create', [AdvertisinfUserController::class, 'create'])->name('advertising.create');
                 Route::post('/create-adversting', [AdvertisinfUserController::class, 'store'])->name('store.adversting.user');
                 // crete advertising for user

                 // Show Advertising and delete , edit button
                 Route::get('/list-advertising', [AdvertisinfUserController::class, 'show'])->name('advertising.show.list');
                 // Show Advertising and delete , edit button

                 // edit adversting
                 Route::get('/edit-advertising/{advertising}', [UserController::class, 'edit'])->name('advertising.update');
                 Route::post('update-advertising-user/{advertising}', [AdvertisinfUserController::class, 'update'])->name('update.user.adversting');
                 // edit adversting


                 // delete advertising
                 Route::get('/advertising/{advertising}', [AdvertisinfUserController::class, 'destroy'])->name('advertising.destroy');
                 // delete advertising

                 // Edit User Profile
                 Route::get('/edit-profile', [UserController::class, 'editProfile'])->name('edit.profile');
                 Route::post('update-profile-user/{user}', [UserController::class, 'updateProfile'])->name('update.profile');
                 // Edit User Profile

                 Route::get('/checkout/{plan}', [CheckOutController::class, 'checkOut'])->name('checkout');
                 Route::post('/checkout', [CheckOutController::class, 'pay'])->name('checkout.pay');

                 // Route::get('/checkout/auth', function () {
                 // });
                 Route::get('/check2', [CheckOutController::class, 'verify'])->name('checkout.verify');
});


require __DIR__ . '/auth.php';
Route::get('/dashboard', function () {
                 return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/email', function () {
                 Mail::to('mohammadrasoulasghari1@gmail.com')->send(new VerifyEmail);
});
