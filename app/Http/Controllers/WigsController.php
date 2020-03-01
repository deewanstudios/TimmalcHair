<?php

namespace App\Http\Controllers;

use App\Category;
use App\Colour;
use App\Length;
use App\Product;
use App\Texture;
use Illuminate\Support\Facades\DB;

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
        // $price = $this->getPriceByLengthId(10);
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
        // dd($request);
        //  $price_id = 1;
        /*  return $price = Length::with(['price:id,price'])
        ->where('price_id', $length->price_id)
        ->firstOrFail(); */

        // return $price = Length::findOrFail('price_id')->price;

        // $price = Length::find(8)->price;
        /* $price = Length::find('id', $length_id);
        $price->price()->where('price_id', $length_id)
        ->get(); */
        // $price = Length::with(['price'])
        // ->where('price_id', $length->price_id)->get();

        /* $price = DB::table('lengths')
        ->leftJoin('prices', 'lengths.price_id', '=', 'prices.id')
        ->where('lengths.id', '=', $length_id)
        ->get(); */

        $price = DB::select(
            "SELECT
    l.id, p.price
FROM
    lengths AS l
        LEFT JOIN
    prices AS p ON p.id = l.price_id
WHERE
    l.id = $length_id"
        );

        // return response()->json($price);
        return $price;

        // dd($price);

        // return 'Hello World from product get price by product Length!';
    }

}
