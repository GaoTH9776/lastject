<?php

use App\Http\Controllers\Admin\TypeproductsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContentsController;
use App\Http\Controllers\Admin\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('promotepage.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//typeprodocts
Route::get('/admin/typeproducts/index',[TypeproductsController::class, 'index'])->name('typeproducts.index');


Route::post('/admin/typeproducts/add', [TypeProductsController::class, 'add'])->name('tyteproducts.add');
Route::get('/admin/typeproducts/from',[TypeproductsController::class, 'from_add'])->name('typeproducts.from_add');

Route::post('/admin/typeproducts/update/{id}', [TypeproductsController::class, 'update'])->name('typeproducts.update');
Route::get('/admin/typeproducts/edit/{id}', [TypeproductsController::class, 'edit'])->name('typeproducts.edit');

Route::get('/admin/typeproducts/delete/{id}',[TypeproductsController::class, 'delete'])->name('typeproducts.delete');


//prodocts
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('product.index');


Route::post('/admin/product/add', [ProductController::class, 'add'])->name('products.add');
Route::get('/admin/product/from',[ProductController::class, 'from_add'])->name('products.from_add');


Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/admin/product/delete/{id}',[ProductController::Class, 'delete'])->name('product.delete');


//abouts    
Route::get('/admin/about/index',[AboutController::class, 'index'])->name('about.index');

Route::post('/admin/about/add', [AboutController::class, 'add'])->name('abouts.add');
Route::get('/admin/about/from',[AboutController::class, 'from_add'])->name('abouts.from_add');

Route::post('/admin/about/update/{id}', [AboutController::class, 'update'])->name('about.update');
Route::get('/admin/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
Route::get('/admin/about/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');


//contents
Route::get('/admin/contents/index',[ContentsController::class, 'index'])->name('contents.index');

Route::post('/admin/contents/add', [ContentsController::class, 'add'])->name('contents.add');
Route::get('/admin/contents/from',[ContentSController::class, 'from_add'])->name('contents.from_add');


Route::post('/admin/contents/update/{id}', [ContentsController::class, 'update'])->name('contents.update');
Route::get('/admin/contents/edit/{id}', [ContentsController::class, 'edit'])->name('contents.edit');
Route::get('/admin/contents/delete/{id}',[ContentSController::Class, 'delete'])->name('contents.delete');


//contact
Route::get('/admin/contacts/index',[ContactsController::class, 'index'])->name('contacts.index');

Route::post('/admin/contacts/add', [ContactsController::class, 'add'])->name('contacts.add');
Route::get('/admin/contacts/from',[ContactSController::class, 'from_add'])->name('contacts.from_add');

Route::post('/admin/contacts/update/{id}', [ContactSController::class, 'update'])->name('contacts.update');
Route::get('/admin/contacts/edit/{id}', [ContactSController::class, 'edit'])->name('contacts.edit');
Route::get('/admin/contacts/delete/{id}',[ContactSController::Class, 'delete'])->name('contacts.delete');
