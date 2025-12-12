<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('ecommerce.sales.listing', compact('orders'));
    }

    public function edit($id)
{
    $order = Order::findOrFail($id);

    return view('ecommerce.sales.edit-order', compact('order'));
}

    public function view($id)
{
    $order = Order::findOrFail($id);

    return view('ecommerce.sales.details', compact('order'));
}

public function create()
{
    return view('ecommerce.sales.add-order');
}

}
