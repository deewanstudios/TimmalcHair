<?php

namespace App\Http\Controllers;

use App\Colour;
use App\Length;
use App\Price;
use App\Product;
use App\Texture;

class WigsController extends Controller
{
    //

    public function index()
    {

        $products = Product::with(['category', 'colour', 'texture', 'length', 'price'])->get();
        $colours  = Colour::all();
        $prices   = Price::all();
        $lengths  = Length::all();
        $textures = Texture::all();
        // dd($products);
        // dd($textures);
        $page = "Hello from Wigs Controller";
        return view('pages.wigs', compact('page', 'products', 'colours', 'textures', 'lengths'));
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
