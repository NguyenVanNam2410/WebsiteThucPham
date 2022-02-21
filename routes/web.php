<?php

use App\Http\Controllers\cartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\productController;
use App\Http\Controllers\SliderController;
use App\Models\User;
use App\Models\tag;

Route::get('403',function(){
    return view('403');
})->name('403');

Route::prefix('admin')->group(function () {
    Route::get('/', function(){
        return view('backend.par.admin');
    })->name('admin.dashboard')->middleware('OnlyAccess');
    Route::get('/file_manager', function(){
        return view('backend.admin.file_manager');
    })->name('file_manager')->middleware('OnlyAccess');
    
    Route::middleware('OnlyAccess')->prefix('category_news')->group(function () {
        Route::get('/',            [CategoryNewsController::class, 'index']) ->name('categoryNews.index');
        Route::get('/create',      [CategoryNewsController::class, 'create'])->name('categoryNews.create');
        Route::post('/store',      [CategoryNewsController::class, 'store']) ->name('categoryNews.store');
        Route::get('/edit/{id}',   [CategoryNewsController::class, 'edit'])  ->name('categoryNews.edit');
        Route::post('/update/{id}',[CategoryNewsController::class, 'update'])->name('categoryNews.update');
        Route::get('/delete/{id}', [CategoryNewsController::class, 'delete'])->name('categoryNews.delete');
    });
    Route::middleware('OnlyAccess')->prefix('News')->group(function () {
        Route::get('/',            [NewController::class, 'index']) ->name('NewController.index');
        Route::get('/create',      [NewController::class, 'create'])->name('NewController.create');
        Route::post('/store',      [NewController::class, 'store']) ->name('NewController.store');
        Route::get('/edit/{id}',   [NewController::class, 'edit'])  ->name('NewController.edit');
        Route::post('/update/{id}',[NewController::class, 'update'])->name('NewController.update');
        Route::get('/delete/{id}', [NewController::class, 'delete'])->name('NewController.delete');
    });
    Route::middleware('OnlyAccess')->prefix('product')->group(function () {
        Route::get('/',            [productController::class, 'index']) ->name('productController.index');
        Route::get('/create',      [productController::class, 'create'])->name('productController.create');
        Route::post('/store',      [productController::class, 'store']) ->name('productController.store');
        Route::get('/edit/{id}',   [productController::class, 'edit'])  ->name('productController.edit');
        Route::post('/update/{id}',[productController::class, 'update'])->name('productController.update');
        Route::get('/delete/{id}', [productController::class, 'delete'])->name('productController.delete');
    });
    Route::middleware('OnlyAccess')->prefix('Menu')->group(function () {
        Route::get('/',            [MenuController::class, 'index']) ->name('MenuController.index');
        Route::get('/create',      [MenuController::class, 'create'])->name('MenuController.create');
        Route::post('/store',      [MenuController::class, 'store']) ->name('MenuController.store');
        Route::get('/edit/{id}',   [MenuController::class, 'edit'])  ->name('MenuController.edit');
        Route::post('/update/{id}',[MenuController::class, 'update'])->name('MenuController.update');
        Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('MenuController.delete');
    });
    Route::middleware('OnlyAccess')->prefix('slider')->group(function () {
        Route::get('/',            [SliderController::class, 'index']) ->name('SliderController.index');
        Route::get('/create',      [SliderController::class, 'create'])->name('SliderController.create');
        Route::post('/store',      [SliderController::class, 'store']) ->name('SliderController.store');
        Route::get('/edit/{id}',   [SliderController::class, 'edit'])  ->name('SliderController.edit');
        Route::post('/update/{id}',[SliderController::class, 'update'])->name('SliderController.update');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('SliderController.delete');
    });
    Route::middleware('OnlyAccess')->prefix('Customer')->group(function () {
        Route::get('/',            [CustomerController::class, 'index']) ->name('CustomerController.index');
        Route::get('/check/{id}',  [CustomerController::class, 'check'])->name('CustomerController.check');
        // Route::get('/checkCart/{id}')
    
    });
});


Route::get('/login_home', [LoginController::class,'index'])->name('LoginController.index');
Route::post('/login_home', [LoginController::class,'store'])->name('LoginController.store');
Route::post('/logout_home', [LoginController::class,'logout'])->name('LoginController.logout');

Route::prefix('frontend')->group(function(){
    Route::get('/home',                [HomeController::class,'index'])->name('HomeController.index');
    // Route::post('/searchTag1',          [HomeController::class, 'ajax_tag1'])->name('ajax_tag1');
    Route::get('/testMail',            [HomeController::class,'testMail']);
    Route::get('/news/{id}',           [HomeController::class,'news'])->name('HomeController.news');
    Route::get('/news_home',           [HomeController::class,'news_home'])->name('HomeController.news_home');
    Route::get('/cart',                [HomeController::class,'cart'])->name('HomeController.cart');
    Route::post('/select-delivery',    [HomeController::class,'select_delivery'])->name('HomeController.select_delivery');
    Route::post('/cart',               [HomeController::class,'PostCart'])->name('HomeController.PostCart');
    Route::get('/product',             [HomeController::class,'product'])->name('HomeController.product');
    Route::get('/product/{id}',        [HomeController::class,'products'])->name('HomeController.products');
    Route::get('/compare',             [HomeController::class,'compare'])->name('HomeController.compare');
    Route::get('/contact',             [HomeController::class,'contact'])->name('HomeController.contact');
    Route::get('/introduce',           [HomeController::class,'introduce'])->name('HomeController.introduce');
    Route::get('/login',               [HomeController::class,'login'])->name('HomeController.login');
    Route::get('/details_new/{id}',    [HomeController::class,'details_new'])->name('HomeController.details_new');
    Route::get('/details_product/{id}',[HomeController::class,'details_product'])->name('HomeController.details_product');
    Route::get('/Add-cart/{id}',       [cartController::class, 'AddCart'])->name('AddCart.index');
    Route::get('/Delete-cart-item/{id}',[cartController::class, 'DeleteItemCart'])->name('DeleteCart.index');
    Route::get('/Delete-cart-List-item/{id}',[cartController::class, 'DeleteListItemCart'])->name('DeleteListCart.index');
});