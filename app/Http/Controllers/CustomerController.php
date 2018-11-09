<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use DB;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = DB::table('customers')->orderBy('cust_id')->get()->all();
        return $customer;
    }

   
    public function store(CustomerRequest $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email
        ]);

        $response = [
            'msg' => 'Create data Success',
            'data' => $customer
        ];

        return response()->json($response, 201);
    }


    public function show(Customer $customer)
    {
        return $customer;
    }

   

    public function update(CustomerRequest $request, Customer $customer)
    {
        $customer->name=$request->name;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->save();

        $response = [
            'msg' => 'Update Success',
            'data' => $customer
        ];

        return response()->json($response,200);
    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return ['msg' => 'Data has been deleted'];
    }
}
