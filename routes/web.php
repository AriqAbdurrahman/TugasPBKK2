<?php

use App\Http\Controllers\barang;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::resource('products', 'ProductController');