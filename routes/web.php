<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

Route::get('/login', [SessionController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

Route::get('/admin/create', [AdminController::class, 'create'])
->middleware('auth.admin')
->name('admin.create');

Route::post('/admin/create',[AdminController::class, 'store'])
->name('admin.store');

Route::resource('admin', AdminController::class);


Route::get('/products',[ProductsController::class, 'index'])
->name('products.index');

Route::get('/products/create',[ProductsController::class, 'create'])
->name('products.create');

//Route::get('/products/business',[ProductsController::class, 'business'])
//->name('products.business');

Route::post('/products/create',[ProductsController::class, 'store'])
->name('products.store');

Route::get('products-detail/{id}', [ProductsController::class, 'detail'])
->name('products.detail');

Route::resource('products', ProductsController::class);

Route::get('cart',[ProductsController::class, 'cart'])
->name('products.cart');

// Route::get('products/cart', [ProductsController::class, 'cart'])
// ->name('products.cart');

// Route::get('add-to-car/{id}', [ProductsController::class, 'addToCar'])
// ->name('products.detail');



Route::resource('products', ProductsController::class);

