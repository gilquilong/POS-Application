<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', ['customers' => Customer::orderBy('full_name')->get()]);
    }

    public function create() { return view('customers.form', ['customer' => new Customer]); }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate(['full_name' => ['required','string','max:255'], 'email' => ['required','email','max:255'], 'phone' => ['nullable','string','max:30']]);
        Customer::create($data);
        return redirect('/customers')->with('success', 'Customer created successfully.');
    }

    public function edit(Customer $customer) { return view('customers.form', compact('customer')); }

    public function update(\Illuminate\Http\Request $request, Customer $customer)
    {
        $data = $request->validate(['full_name' => ['required','string','max:255'], 'email' => ['required','email','max:255'], 'phone' => ['nullable','string','max:30']]);
        $customer->update($data);
        return redirect('/customers')->with('success', 'Customer updated successfully.');
    }
}
