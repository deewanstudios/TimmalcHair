<?php

namespace App\Http\Controllers;

use App\Category;
use App\Colour;
use App\Length;
use App\Price;
use App\Product;
use App\Texture;

class WigsController extends Controller
{

    public function index()
    {
        /*      $products = Product::with([
        'category', 'colour', 'texture', 'length', 'price', 'images', 'image' => function ($query) {
        $query->where('name', 'like', '%body%');
        }])->get(); */
        $products = Product::with(
            [
                'image' => function ($query) {
                    $query->where('name', 'like', '%body%');
                },
                'price' => function ($query) {
                    $query->min('price');
                },
            ]
        )->get();
        /* $colours  = Colour::all();
        $prices   = Price::all();
        $lengths  = Length::all();
        $textures = Texture::all(); */
        // $images   = ProductImage::all();
        // dd($products);
        // dd($textures);
        $page = "Hello from Wigs Controller";
        return view('pages.wigs', compact('page', 'products', 'colours', 'textures', 'lengths', 'images'));
    }

    public function showCategory()
    {
        // Category $category
        return 'Hello World from product category!';
    }

    public function showSingleProduct(Category $category, Texture $texture)
    {
        // Category $category, Texture $texture
        $product = Product::with(['category', 'colour', 'length', 'texture', 'price', 'images'])
            ->where('category_id', $category->id)
            ->where('texture_id', $texture->id)
            ->get();
        $textures = Texture::all();
        $lengths  = Length::all();
        $colours  = Colour::all();
        // $price    = $this->getPriceByLengthId($product->price->length_id);
        $price = $this->getPriceByLengthId(10);
        // dd($product);
        // $page = 'Hello World from single product!';
        return view('pages.single-product', compact('product', 'textures', 'lengths', 'colours'));
    }

    /* $product = Product::with(['category', 'description', 'size', 'filling', 'sponge', 'price', 'images'])
    ->where('cake_category_id', $category->id)
    ->where('name', $product->name)
    ->findOrFail($product->id) */

    public function getPriceByLengthId($length_id)
    {
        $price = Price::where('length_id', $length_id)
            ->firstOrFail();
        dd($price);
    }

}
