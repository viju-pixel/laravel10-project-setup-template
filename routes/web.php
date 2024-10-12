<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\productController;


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

Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/', function () {
    return view('frontend.index');
});


route::get('/product',[productController::class,'index'])->name('product');
route::get('/add-product',[productController::class,'addProduct'])->name('add.product');

