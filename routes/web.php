<?php

use App\Http\Controllers\{AccountController,
    CategoryController,
    HomeController,
    OrderController,
    PermissionController,
    ProductController,
    RoleController,
    SettingController,
    TestController,
    UserController};
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;

Route::any('/', static function () {
    return view('website.pages.homepage');
});

Auth::routes();

Route::prefix('admin')->group(function (){
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
    Route::resource('/categories', CategoryController::class)->except(['create', 'edit', 'show']);
    Route::resource('/products', ProductController::class)->except(['create', 'edit', 'show']);
    Route::resource('/orders', OrderController::class)->except(['create', 'edit', 'show']);
});
Route::get('file-export', [UserController::class, 'userExport'])->name('file-export');
Localization::route();
