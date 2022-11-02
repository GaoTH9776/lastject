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


//prodocts
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('product.index');


//abouts
Route::get('/admin/about/index',[AboutController::class, 'index'])->name('about.index');

//contents
Route::get('/admin/contents/index',[ContentsController::class, 'index'])->name('contents.index');

//contact
Route::get('/admin/contacts/index',[ContactsController::class, 'index'])->name('contacts.index');