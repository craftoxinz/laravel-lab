<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return 'ini adalah halaman produk dari controller';
    }

    public function show() {
        return 'ini adalah halaman show produk.';
    }

    public function view() {
        return view('product');
    }
}
