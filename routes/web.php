<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\DivisionController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\VendorController;

/*
|--------------------------------------------------------------------------
| Fronend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, "homepage"])->name('homepage');

Route::get('/404', [PagesController::class, "pageNotFound"])->name('pageNotFound');
Route::get('/about-us', [PagesController::class, "aboutUs"])->name('aboutUs');
Route::get('/contact-us', [PagesController::class, "contactUs"])->name('contactUs');
Route::get('/checkout', [PagesController::class, "checkout"])->name('checkout');
Route::get('/vendor-list', [PagesController::class, "vendorList"])->name('vendorList');
Route::get('/my-account', [PagesController::class, "myAccount"])->name('myAccount');
Route::get('/shopping-cart', [PagesController::class, "shoppingCart"])->name('shoppingCart');
Route::get('/store-detail-info', [PagesController::class, "storeDetailInfo"])->name('storeDetailInfo');
Route::get('/store-list', [PagesController::class, "storeList"])->name('storeList');
Route::get('/user-info', [PagesController::class, "userInformation"])->name('userInformation');
Route::get('/vendor-dashboard', [PagesController::class, "vendorDashboard"])->name('vendorDashboard');
Route::get('/vendor-store', [PagesController::class, "vendorStore"])->name('vendorStore');




/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'] , function(){  
    // Super Admin Dashboard 
    Route::get('/dashboard', [DashboardController::class, "dashboard"])->middleware('auth', 'isAdmin')->name('admin.dashboard');

    // Brand Group
    Route::group(['prefix' => '/brand'], function(){
        Route::get('/manage', [BrandController::class, "index"])->middleware(['auth'])->name('brand.manage');
        Route::get('/create', [BrandController::class, "create"])->middleware(['auth'])->name('brand.create');
        Route::post('/store', [BrandController::class, "store"])->middleware(['auth'])->name('brand.store');        
        Route::get('/edit/{id}', [BrandController::class, "edit"])->middleware(['auth'])->name('brand.edit');
        Route::post('/update/{id}', [BrandController::class, "update"])->middleware(['auth'])->name('brand.update');
        Route::post('/destroy/{id}', [BrandController::class, "destroy"])->middleware(['auth'])->name('brand.destroy');
    });


    // Category Group
    Route::group(['prefix' => '/category'], function(){
        Route::get('/manage', [CategoryController::class, "index"])->middleware(['auth'])->name('category.manage');
        Route::get('/create', [CategoryController::class, "create"])->middleware(['auth'])->name('category.create');
        Route::post('/store', [CategoryController::class, "store"])->middleware(['auth'])->name('category.store');        
        Route::get('/edit/{id}', [CategoryController::class, "edit"])->middleware(['auth'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, "update"])->middleware(['auth'])->name('category.update');
        Route::post('/destroy/{id}', [CategoryController::class, "destroy"])->middleware(['auth'])->name('category.destroy');
    });

    // Product Group
    Route::group(['prefix' => '/product'], function(){
        Route::get('/manage', [ProductController::class, "index"])->middleware(['auth'])->name('product.manage');
        Route::get('/create', [ProductController::class, "create"])->middleware(['auth'])->name('product.create');
        Route::post('/store', [ProductController::class, "store"])->middleware(['auth'])->name('product.store');        
        Route::get('/edit/{id}', [ProductController::class, "edit"])->middleware(['auth'])->name('product.edit');
        Route::post('/update/{id}', [ProductController::class, "update"])->middleware(['auth'])->name('product.update');
        Route::post('/destroy/{id}', [ProductController::class, "destroy"])->middleware(['auth'])->name('product.destroy');
    });


    // Vendor Group
    Route::group(['prefix' => '/vendor'], function(){
        Route::get('/manage', [VendorController::class, "index"])->middleware(['auth'])->name('vendor.manage');
        Route::get('/create', [VendorController::class, "create"])->middleware(['auth'])->name('vendor.create');
        Route::post('/store', [VendorController::class, "store"])->middleware(['auth'])->name('vendor.store');        
        Route::get('/edit/{id}', [VendorController::class, "edit"])->middleware(['auth'])->name('vendor.edit');
        Route::post('/update/{id}', [VendorController::class, "update"])->middleware(['auth'])->name('vendor.update');
        Route::post('/destroy/{id}', [VendorController::class, "destroy"])->middleware(['auth'])->name('vendor.destroy');
    });


    // Division Group
    Route::group(['prefix' => '/division'], function(){
        Route::get('/manage', [DivisionController::class, "index"])->middleware(['auth'])->name('division.manage');
        Route::get('/create', [DivisionController::class, "create"])->middleware(['auth'])->name('division.create');
        Route::post('/store', [DivisionController::class, "store"])->middleware(['auth'])->name('division.store');        
        Route::get('/edit/{id}', [DivisionController::class, "edit"])->middleware(['auth'])->name('division.edit');
        Route::post('/update/{id}', [DivisionController::class, "update"])->middleware(['auth'])->name('division.update');
        Route::post('/destroy/{id}', [DivisionController::class, "destroy"])->middleware(['auth'])->name('division.destroy');
    });

    // District Group
    Route::group(['prefix' => '/district'], function(){
        Route::get('/manage', [DistrictController::class, "index"])->middleware(['auth'])->name('district.manage');
        Route::get('/create', [DistrictController::class, "create"])->middleware(['auth'])->name('district.create');
        Route::post('/store', [DistrictController::class, "store"])->middleware(['auth'])->name('district.store');        
        Route::get('/edit/{id}', [DistrictController::class, "edit"])->middleware(['auth'])->name('district.edit');
        Route::post('/update/{id}', [DistrictController::class, "update"])->middleware(['auth'])->name('district.update');
        Route::post('/destroy/{id}', [DistrictController::class, "destroy"])->middleware(['auth'])->name('district.destroy');
    });

});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
