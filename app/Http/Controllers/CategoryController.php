<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $category = DB::table('categories')->orderBy('category_id')->get()->all();
        return $category;
    }


    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->name
        ]);

        $response = [
            'msg' => 'Create data Success',
            'data' => $category
        ];

        return response()->json($response, 201);
    }


    public function show(Category $category)
    {
        return $category;
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $category->name=$request->name;
        $category->save();

        $response = [
            'msg' => 'Update data Success',
            'data' => $category
        ];

        return response()->json($response, 200);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return ['msg' => 'Data has been deleted'];
    }
}
