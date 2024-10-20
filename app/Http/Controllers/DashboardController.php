<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $produk = Product::count();
        return view('admin.dashboard.main', compact('produk'));
    }
}