<?php

namespace App\Http\Controllers;

use App\Models\Product;              
use Illuminate\Http\Request;          

class ProductController extends Controller
{
    // Show product list
    public function index()
    {
        $products = Product::latest()->get();
        return view('ecommerce.catalog.products', compact('products'));
    }

    // Show add product page
    public function create()
    {
        return view('ecommerce.catalog.add-product');
    }

    // ✅ PUT YOUR CODE HERE
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required|in:active,inactive,draft',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);

        return redirect()->route('products.index')
            ->with('success', 'Product added successfully');
    }

    // Show edit product page
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('ecommerce.catalog.edit-product', compact('product'));
    }

    // Update product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'kategori' => 'required|string',
            'harga' => 'required|numeric',
            'status' => 'required|in:active,inactive,draft',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    // Delete product
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index');
    }
}
