<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
        $data = DB::table('products')->get();
        return view('products', compact('data'));
    }

    public function create(Request $request){
        $products = new Product;
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->amount = $request->input('amount');
        $products->save();

        return redirect()->back();
    }

    public function delete($id){
        Product::destroy($id);

        return redirect()->back();
    }
}
