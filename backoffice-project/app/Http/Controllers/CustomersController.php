<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
        public function index()
    {
        $customers = Customers::all();
        return view('ecommerce.customers.listing', compact('customers'));
    }

        public function edit($id)
    {
        $customer = Product::findOrFail($id);

        return view('ecommerce.customers.edit-customer', compact('customer'));
    }

    public function create()
    {
        return view('ecommerce.customers.add-customer');
    }

        public function show()
    {
        return view('ecommerce.customers.details');
    }
}
