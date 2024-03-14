<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BusinessPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DasboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::middleware('auth')->group(function () {
        // Category Route
        Route::get('/category', [CategoryController::class, 'category'])->name('category.show');
        Route::get('/add-category', [CategoryController::class, 'addcategory'])->name('category.add');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        // Business Posts
        Route::get('/add-business-post', [BusinessPostController::class, 'addpostbusiness'])->name('business.post');
        Route::post('/business/store', [BusinessPostController::class, 'storeBusinessPost'])->name('business.store');
        Route::get('/business/{id}/edit', [BusinessPostController::class, 'editBusinessPost'])->name('business.edit');
        Route::put('/business/{id}', [BusinessPostController::class, 'updateBusinessPost'])->name('business.update');
        Route::delete('/business/{id}', [BusinessPostController::class, 'destroyBusinessPost'])->name('business.destroy');
        Route::get('/show-business-post', [BusinessPostController::class, 'showbusinesspost'])->name('business.show.post');

        Route::get('/add-category-post', [CategoryController::class, 'postcategory'])->name('category.post');
        Route::get('/add-carrer-post', [BusinessPostController::class, 'addpostcarrer'])->name('carrer.post');
        Route::get('/add-sport-post', [BusinessPostController::class, 'addpostsport'])->name('sport.post');
        Route::get('/add-life-post', [BusinessPostController::class, 'addpostlife'])->name('life.post');
        Route::get('/add-health-post', [BusinessPostController::class, 'addposthealth'])->name('health.post');
        Route::get('/add-economy-post', [BusinessPostController::class, 'addposteconomy'])->name('economy.post');
        // Admin Business Port Module Route
        // Media Post
        Route::get('/show-media', [MediaController::class, 'showmedia'])->name('show.media');
        Route::get('/add-image', [MediaController::class, 'addimage'])->name('add.image');
        Route::post('/media-images/store', [MediaController::class, 'store'])->name('media-images.store');
        Route::get('/media-images/edit/{id}', [MediaController::class, 'edit'])->name('media-images.edit');
        Route::put('/media-images/update/{id}', [MediaController::class, 'update'])->name('media-images.update');
        Route::delete('/media-images/delete/{id}', [MediaController::class, 'destroy'])->name('media-images.destroy');

        // Subcribe show
        Route::get('/show-subscriber', [SubscriberController::class, 'subscribe'])->name('show.subscribe');
        Route::get('/show-business-post', [BusinessPostController::class, 'showbusinesspost'])->name('business.show.post');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        //about
        Route::get('/about/create', [AboutController::class, 'create'])->name('about.add');
        Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/about/show', [AboutController::class, 'index'])->name('about.show');
        Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::put('/about/{about}', [AboutController::class, 'update'])->name('about.update');

    });
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/advertise', [HomeController::class, 'advertise']);
Route::get('/media', [HomeController::class, 'media']);
Route::get('/corporate-infomation', [HomeController::class, 'corporate_infomation']);
Route::get('/compliance', [HomeController::class, 'compliance']);
Route::get('/apps-products', [HomeController::class, 'apps_products']);
Route::get('/finance', [HomeController::class, 'finance']);
Route::get('/news', [HomeController::class, 'news']);
Route::get('/business/{id}', [HomeController::class, 'business'])->name('business');
Route::get('/fashion', [HomeController::class, 'fashion']);
Route::get('/show', [HomeController::class, 'show'])->name('show');
// Store Subscriber Detail
Route::post('/subscription/store',[SubscriptionController::class,'storeSubscriber'])->name('subscription.store');
//contact route
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

require __DIR__ . '/auth.php';
