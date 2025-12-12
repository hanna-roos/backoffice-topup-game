<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ✅ Import the model

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('ecommerce.catalog.products', compact('products'));
    }

    public function edit($id)
{
    $product = Product::findOrFail($id);

    return view('ecommerce.catalog.edit-product', compact('product'));
}

public function create()
{
    return view('ecommerce.catalog.add-product');
}

}
