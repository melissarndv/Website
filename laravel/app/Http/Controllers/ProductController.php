<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;


class ProductController extends Controller
{
    public function see($product)
    {
        $prod = Product::where('id', $product)->firstOrFail();
        return view('product.see')->withProduct($prod);
        // $products = new Product();
 
        // $all_product = $products::all();
 
        // return view('product.see')->withProducts($all_product);
    }
}
