<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{

    // menampilkan seluruh isi data
    public function index()
    {
        return Product::all();
    }

    
    // menambah data
    public function store(ProductRequest $request)
    {


        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price
        ]);

        $response = [
            'msg' => 'Create data Success',
            'data' => $product
        ];

        return response()->json($response, 201);
    }

    // menampilkan data id
    public function show(Product $product)
    {
        return $product;
    }


    // untuk mengupdate data / mengubah data 
    public function update(ProductRequest $request, Product $product)
    {
        $product->name=$request->name;
        $product->category_id=$request->category_id;
        $product->price=$request->price;
        $product->save();

        $response = [
            'msg' => 'Update data Success',
            'data' => $product
        ];

        return response()->json($response, 200);
    }


    // menghapus data
    public function destroy(Product $product)
    {
        $product->delete();
        return ['msg' => 'data has been deleted'];
    }
}
