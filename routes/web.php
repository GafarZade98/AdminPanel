<?php

use App\Http\Controllers\{AccountController,
    BannerController,
    CartController,
    CategoryController,
    ContactController,
    FaqController,
    HomeController,
    OrderController,
    PartnerController,
    PermissionController,
    ProductController,
    RoleController,
    SettingController,
    SolutionController,
    WebsiteController,
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
    Route::resource('/tests', WebsiteController::class)->except(['create', 'edit', 'show']);
    Route::resource('/users', UserController::class)->except(['create', 'edit', 'show']);
    Route::resource('/roles', RoleController::class)->except(['create', 'edit', 'show']);
    Route::resource('/faqs', FaqController::class)->except(['create', 'edit', 'show']);
    Route::resource('/permissions', PermissionController::class)->except(['create', 'edit', 'show']);
    Route::resource('/settings', SettingController::class)->except(['create', 'edit', 'show']);
    Route::resource('/solutions', SolutionController::class)->except(['create', 'edit', 'show']);
    Route::resource('/categories', CategoryController::class)->except(['create', 'edit', 'show']);
    Route::resource('/products', ProductController::class)->except(['create', 'edit', 'show']);
    Route::resource('/banners', BannerController::class)->except(['create', 'edit', 'show']);
    Route::resource('/partners', PartnerController::class)->except(['create', 'edit', 'show']);
    Route::get('/orders',[ OrderController::class, 'view'])->name('orders.view');
    Route::delete('/orders/delete/{order}',[ OrderController::class, 'destroy'])->name('orders.delete');
    Route::get('/contacts',[ ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/destroy/{contact}',[ ContactController::class, 'destroy'])->name('contacts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('account', [WebsiteController::class, 'account'])->name('account');
    Route::get('wishlist', [WebsiteController::class, 'wishlist'])->name('wishlist');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart/store', [CartController::class, 'store'])->name('cart.create');
    Route::delete('cart/destroy/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::post('cart/update/{id}/{qty}', [CartController::class, 'update'])->name('cart.update');
    Route::post('/orders/create',[ OrderController::class, 'create'])->name('orders.create');
    Route::get('/orders/checkout',[ OrderController::class, 'checkout'])->name('orders.checkout');
    Route::post('/orders/update/{order}',[ OrderController::class, 'update'])->name('orders.update');
    Route::get('/account/orders',[ OrderController::class, 'myOrders'])->name('orders.my-orders');
});
Route::get('homepage', [WebsiteController::class, 'homepage'])->name('homepage');
Route::get('product/{name}', [WebsiteController::class, 'product'])->name('product');
Route::get('products/{slug}', [WebsiteController::class, 'products'])->name('products');
Route::get('products', [WebsiteController::class, 'allProducts'])->name('all-products');
Route::get('user-login', [WebsiteController::class, 'login'])->name('user-login');
Route::get('register', [WebsiteController::class, 'register'])->name('register');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::get('contact', [WebsiteController::class, 'contact'])->name('contact');
Route::post('contact/store', [ContactController::class, 'create'])->name('contact.create');
Route::get('privacy', [WebsiteController::class, 'privacy'])->name('privacy');
Route::get('terms', [WebsiteController::class, 'terms'])->name('terms');
Route::get('faqs', [WebsiteController::class, 'faqs'])->name('faqs');

Route::get('file-export', [UserController::class, 'userExport'])->name('file-export');
Localization::route();
