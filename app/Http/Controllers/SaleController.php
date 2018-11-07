<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\SaleRequest;

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

        $sale = Sale::create([
            'date' => $request->date,
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
        $sale->date = $request->date;
        $sale->cust_id = $request->cust_id;
        $sale->product_id = $request->product_id;
        $sale->qty = $request->qty;
        $sale->price = $request->price;
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
