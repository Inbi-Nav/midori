<?php

namespace App\Http\Controllers;

use App\Models\Product;  

class ShopController extends Controller
{
    // Catálogo de productos
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    // Detalle de producto
    public function show(Product $product)
    {
        return view('shop.show', compact('product'));
    }
}
