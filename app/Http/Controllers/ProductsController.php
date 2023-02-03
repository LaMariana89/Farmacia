<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function show(Product $product){

        return view('products.business', compact('product'));
    }

    public function detail($id){
        $products = Product::find($id);
        return view('products.detail')->with('product' ,$products);
    }

    // public function cart(Product $product,$id){
    //     $products = Product::find($id);
    //     if($products->country>=1){
    //         $products->country=$products->country-1.00;
    //     }
    //     $products->save();
    //     return view('products.detail', compact('product'));
    // }

    // public function cart(Product $product){

    //     return view('products.cart', compact('product'));
    // }

    public function cart(){
        
      return view('products.cart');
     }

    /*

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $products = new Product();

        $products->title = $request->title;
        $products->country = $request->country;
        $products->price = $request->price;

        $products->save();

        return redirect()->route('products.index');
    }

    public function edit($id){

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $products = Product::find($id);

        $products->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id){

        $products = Product::find($id);

        $products->delete();

        return redirect()->route('products.index');
    }*/

    
}
