<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request){
        $products = new Product;
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->amount = $request->input('amount');
        $products->save();

        return redirect()->back()->withFragment('products');
    }

    public function delete($id){
        Product::destroy($id);

        return redirect()->back()->withFragment('products');
    }
}
