<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;


class CatalogController extends Controller
{
    public function see()
    {
        $products = new Product();
 
        $all_product = $products::all();
 
        return view('catalog.see')->withProducts($all_product);
    }
}
