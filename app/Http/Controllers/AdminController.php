<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{

    public function home(){
        return view('admin.home');
    }

    public function index(){

        $products = Product::all();

        return view('admin.index', compact('products'));

        
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        $products = new Product();

        $products->title = $request->title;
        $products->country = $request->country;
        $products->price = $request->price;
        $products->image = $request->image;

        $products->save();

        return redirect()->route('admin.index');
    }

    public function edit($id){

        $product = Product::find($id);
        //$product->title = $request->title;
        //$product->country = $request->country;
        //$product->price = $request->price;
        //$product->image = $request->image;

        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id){

        $products = Product::find($id);

        $products->title=$request->get('title');
        $products->country=$request->get('country');
        $products->price=$request->get('price');
        $products->image=$request->get('image');
        $products->save();
        //$products->update($request->all());

        return redirect()->route('admin.index');
    }


    public function destroy($id){

        $products = Product::find($id);

        $products->delete();

        return redirect()->route('admin.index');
    }



}

