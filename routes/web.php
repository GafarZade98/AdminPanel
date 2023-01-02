<?php

use App\Http\Controllers\{AccountController,
    BannerController,
    CartController,
    CategoryController,
    HomeController,
    OrderController,
    PartnerController,
    PermissionController,
    ProductController,
    RoleController,
    SettingController,
    SolutionController,
    TestController,
    UserController};
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::any('/', static function () {
    return view('website.pages.homepage');
});

Auth::routes();

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('home', [HomeController::class, 'index'])->name('index');
    Route::controller(AccountController::class)->prefix('account')->group(function (){
        Route::get('/', 'index')->name('account.index');
        Route::put('/{user}', 'edit')->name('account.edit');
        Route::get('/{user}', 'deleteAvatar')->name('account.delete-avatar');
    });
    Route::resource('/tests', TestController::class)->except(['create', 'edit', 'show']);
    Route::resource('/users', UserController::class)->except(['create', 'edit', 'show']);
    Route::resource('/roles', RoleController::class)->except(['create', 'edit', 'show']);
    Route::resource('/permissions', PermissionController::class)->except(['create', 'edit', 'show']);
    Route::resource('/settings', SettingController::class)->except(['create', 'edit', 'show']);
    Route::resource('/solutions', SolutionController::class)->except(['create', 'edit', 'show']);
    Route::resource('/categories', CategoryController::class)->except(['create', 'edit', 'show']);
    Route::resource('/products', ProductController::class)->except(['create', 'edit', 'show']);
    Route::resource('/orders', OrderController::class)->except(['create', 'edit', 'show']);
    Route::resource('/banners', BannerController::class)->except(['create', 'edit', 'show']);
    Route::resource('/partners', PartnerController::class)->except(['create', 'edit', 'show']);
});

Route::middleware('auth')->group(function () {
    Route::get('wishlist', [TestController::class, 'wishlist'])->name('wishlist');
    Route::get('account', [TestController::class, 'account'])->name('account');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart/store', [CartController::class, 'store'])->name('cart.create');
    Route::delete('cart/destroy/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('cart/update/{id}/{qty}', [CartController::class, 'update'])->name('cart.update');
});
Route::get('homepage', [TestController::class, 'homepage'])->name('homepage');
Route::get('product/{name}', [TestController::class, 'product'])->name('product');
Route::get('products/{slug}', [TestController::class, 'products'])->name('products');
Route::get('products', [TestController::class, 'allProducts'])->name('all-products');
Route::get('user-login', [TestController::class, 'login'])->name('user-login');
Route::get('register', [TestController::class, 'register'])->name('register');
Route::get('about', [TestController::class, 'about'])->name('about');
Route::get('contact', [TestController::class, 'contact'])->name('contact');
Route::post('contact/store', [TestController::class, 'contact'])->name('contact.create');
Route::get('blogs', [TestController::class, 'blogs'])->name('blogs');
Route::get('blog', [TestController::class, 'blog'])->name('blog');
Route::get('privacy', [TestController::class, 'privacy'])->name('privacy');
Route::get('terms', [TestController::class, 'terms'])->name('terms');
Route::get('contract', [TestController::class, 'contract'])->name('contract');
Route::get('faqs', [TestController::class, 'faqs'])->name('faqs');

Route::get('file-export', [UserController::class, 'userExport'])->name('file-export');
Localization::route();
