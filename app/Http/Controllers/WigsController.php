<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class WigsController extends Controller
{
    //

    public function index()
    {

        $products = Product::with(['category', 'colour', 'texture', 'length', 'price'])->get();
        // dd($products);
        $page = "Hello from Wigs Controller";
        return view('Pages.wigs', compact('page', 'products'));
    }

    public function showCategory()
    {
        // Category $category
        return 'Hello World from product category!';
    }

    public function showSingleProduct()
    {
        return 'Hello World from single product!';
    }
}
