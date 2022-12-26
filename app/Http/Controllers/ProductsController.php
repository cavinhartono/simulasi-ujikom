<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    public function index()
    {
        $productList = Product::with('category')->paginate(10);
        $products = Product::with('category')->orderBy('created_at', 'desc')->limit(4)->get();
        $categories = Category::all();
        return view('index', compact(['products', 'productList', 'categories']));
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
        $categories = Category::all();
        return view('edit', compact(['product', 'categories']));
    }

    public function update()
    {
        # code...
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/');
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('view', compact(['product']));
    }
}
