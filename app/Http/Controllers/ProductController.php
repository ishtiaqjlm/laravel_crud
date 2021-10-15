<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        //$all_data=Product::getproduct(); 
        return view('layout');
    }
    public function abc(Request $request){
        //dd($request);
        $product=new Product;
        //$product->name=$request->pname;
        $product->fill($request->all());
        //dd($product);
        $product->save();
        return redirect()->back();
    }
    public function listing(){
        //dd($request);
        $all_product = Product::get();
        return view('listing')->with(compact("all_product"));
    }
    public function delete($id){
        //dd($request);
        $delproduct = Product::find($id)->delete();
        
         return redirect()->back();
    }
}
