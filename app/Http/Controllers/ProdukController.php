<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class ProdukController extends Controller
{
    public function index()
    {
        // Jalanin fungsi getAllProduk dari model
        $produk = Produk::getAllProduk();

        // Mengirim data produk ke view 'admin.produk.produk'
        return view('admin.produk', compact('produk'));
    }
}