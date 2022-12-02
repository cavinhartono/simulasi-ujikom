<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('index', compact(['products', 'categories']));
    }

    public function store(ProductStoreRequest $request)
    {
        $getImage = $request->file('image')->store('product_img');

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'qty' => $request->qty,
            'image' => $getImage,
            'desc' => $request->desc,
        ]);

        return redirect('/')->with('success', "You have successfully upload image");
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
