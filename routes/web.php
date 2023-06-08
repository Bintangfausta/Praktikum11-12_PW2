<?php

// Manggil Controller
use App\Http\Controllers\DashboardController;

// Manggil Controller Produk
use App\Http\Controllers\ProdukController;

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
    return view('welcome');
});


// Bikin routing ke halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Bikin raoyting ke halaman Produk
Route::get('/produk', [ProdukController::class, 'index']);