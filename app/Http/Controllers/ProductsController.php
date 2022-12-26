<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->where('user_id', Auth::user()->id)->paginate(4);
        $productList = Product::with('category')->paginate(5);
        $products = Product::with('category')->orderBy('created_at', 'desc')->limit(4)->get();
        $categories = Category::all();
        return view('index', compact(['products', 'productList', 'categories', 'carts']));
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

    public function update(Request $request, $id)
    {
        $getProduct = Product::find($id);
        $getProduct->update($request->except(['_token', 'submit']));
        return redirect('/');
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
        $reviews = Review::all();
        return view('view', compact(['product']));
    }
}
