<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::with('categories')->get();
        return response()->json(ProductResource::collection($products),200);
    }
    //filter products by category
    public function filterCategory(Request $request){
        $query=Product::query();
        if ($request->filled('category')) {                       
        $query->whereHas('categories', function ($q) use ($request) {
            $q->where('categories.id', $request->category);
        });
       }

       $products=$query->get();
       return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    //show one object from product
    public function show(string $id)
    {
        $product=Product::findorfail($id);
        return response()->json( new ProductResource($product),200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
