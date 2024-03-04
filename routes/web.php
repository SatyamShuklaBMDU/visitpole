<?php

use App\Http\Controllers\Admin\BusinessPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[DasboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::middleware('auth')->group(function () {
        Route::get('/category', [CategoryController::class, 'category'])->name('category.show');
        Route::get('/add-category', [CategoryController::class, 'addcategory'])->name('category.add');
        Route::get('/add-category-post', [CategoryController::class, 'postcategory'])->name('category.post');
        Route::get('/add-business-post', [BusinessPostController::class, 'addpostbusiness'])->name('business.post');
        Route::get('/add-carrer-post', [BusinessPostController::class, 'addpostcarrer'])->name('carrer.post');
        Route::get('/add-sport-post', [BusinessPostController::class, 'addpostsport'])->name('sport.post');
        Route::get('/add-life-post', [BusinessPostController::class, 'addpostlife'])->name('life.post');
        Route::get('/add-health-post', [BusinessPostController::class, 'addposthealth'])->name('health.post');
        Route::get('/add-economy-post', [BusinessPostController::class, 'addposteconomy'])->name('economy.post');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
require __DIR__.'/auth.php';
