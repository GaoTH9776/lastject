<?php

use App\Http\Controllers\Admin\TypeproductsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContentsController;
use App\Http\Controllers\Admin\ContactsController;
use Illuminate\Support\Facades\Route;
use Laravel\Ui\Presets\React;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//typeprodocts
Route::get('/admin/typeproducts/index',[TypeproductsController::class, 'index'])->name('typeproducts.index');


Route::post('/admin/typeproducts/add', [TypeProductsController::class, 'add'])->name('tyteproducts.add');
Route::get('/admin/typeproducts/from',[TypeproductsController::class, 'from_add'])->name('typeproducts.from_add');

//prodocts
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('product.index');


Route::post('/admin/product/add', [ProductController::class, 'add'])->name('products.add');
Route::get('/admin/product/from',[ProductController::class, 'from_add'])->name('products.from_add');


//abouts
Route::get('/admin/about/index',[AboutController::class, 'index'])->name('about.index');

Route::post('/admin/about/add', [AboutController::class, 'add'])->name('abouts.add');
Route::get('/admin/about/from',[AboutController::class, 'from_add'])->name('abouts.from_add');

//contents
Route::get('/admin/contents/index',[ContentsController::class, 'index'])->name('contents.index');

Route::post('/admin/contents/add', [ContentsController::class, 'add'])->name('contents.add');
Route::get('/admin/contents/from',[ContentSController::class, 'from_add'])->name('contents.from_add');


//contact
Route::get('/admin/contacts/index',[ContactsController::class, 'index'])->name('contacts.index');

Route::post('/admin/contacts/add', [ContactsController::class, 'add'])->name('contacts.add');
Route::get('/admin/contacts/from',[ContactSController::class, 'from_add'])->name('contacts.from_add');