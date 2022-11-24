<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact(['products']));
    }

    public function edit($id)
    {
        $product = Product::find($id);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');
    }
}
