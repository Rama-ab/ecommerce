<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Traits\imageTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use imageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view('products.index' , compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('products.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

            $product=new Product();
            $product->name = $request->name;
            $product->price =$request->price;
            $product->description = $request->description;
            $product->image = $this->uploadImage($request , 'image' , 'productImage');
            $product->save();
            $product->categories()->attach($request->category_ids);
            return redirect()->route('products.index');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show' , compact('product'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('products.edit' , compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        
       
        if (!empty ($request->file('image'))) {
            if(\File::exists(public_path('productImage/').$product->image)){
                \File::delete(public_path('productImage/').$product->image);
            }
            $imageName = uniqid() . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('productImage'), $imageName);
            $blog->image= $imageName;
        } 

        $product->save();
        $product->categories()->sync($request->category_ids);

        return redirect()->route('products.index');   
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function archive(){

        $products=Product::onlyTrashed()->get();
        return view('products.archive',compact('products'));
    }

    public function restore($id){

        Product::withTrashed()->where('id',$id)->restore();
        return redirect()->route('products.index');
    }

    public function forceDelete($id){

        Product::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('products.index');
    }
}
