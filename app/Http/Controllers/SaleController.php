<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;
use App\Product;
use App\Customer;


class SaleController extends Controller
{

    // menampilkan selueruh data
    public function index()
    {
        return Sale::all();
    }

    // memasukkan data
    public function store(SaleRequest $request)
    {
        $response = [];

        $product = Product::where('product_id',$request->product_id)->first();
        $customer = Customer::where('cust_id', $request->cust_id)->first(); 


        if (is_null($product) || is_null($customer)) {
            if (is_null($product)) {
                $response['product'] =  'Product_id yang anda masukkan tidak terdaftar';
            }
            if (is_null($customer)) {
                $response['customer'] = 'Cust_id yang anda masukkan tidak terdaftar';
            }
            return response()->json(['msg' => $response],406);
        }

        $sale = Sale::create([
            'date' => date('d-m-Y H:i:s'),
            'cust_id' => $request->cust_id,
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'price' => $request->price
        ]);

        $response = [
            'msg' => 'Create data Success',
            'data' => $sale
        ];

        return response()->json($response, 201);
    }

    
    // melihat data
    public function show(Sale $sale)
    {
        return $sale;
    }

    // mengubah isi data
    public function update(SaleRequest $request, Sale $sale)
    {
        $response = [];

        $product = Product::where('product_id',$request->product_id)->first();
        $customer = Customer::where('cust_id', $request->cust_id)->first(); 


        if (is_null($product) || is_null($customer)) {
            if (is_null($product)) {
                $response['product'] =  'Product_id yang anda masukkan tidak terdaftar';
            }
            if (is_null($customer)) {
                $response['customer'] = 'Cust_id yang anda masukkan tidak terdaftar';
            }
            return response()->json(['msg' => $response],406);
        }

        $sale->date=date('d-m-Y H:i:s');
        $sale->cust_id=$request->cust_id;
        $sale->product_id=$request->product_id;
        $sale->qty=$request->qty;
        $sale->price=$request->price;
        $sale->save();

        $response = [
            'msg' => 'Update data Success',
            'data' => $sale
        ];

        return response()->json($response, 200);
    }

    // hapus data
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return ['msg' => 'Data has been deleted'];
    }
}
