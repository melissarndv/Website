<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Catalog;
use App\Model\Panier;
use App\User;

class AdminController extends Controller
{
    public function test() //test
    {
        // $products = new Product();
 
        // $all_product = $products::all();
 
        // return view('prdouct.see')->withProducts($all_product);
        return view('admin.form');
        
    }

    public function catalog($product)
    {
        $prod = Product::where('id', $product)->firstOrFail();
        return view('panier.see')->withProduct($prod);
    }

    public function product()
    {
        return view('product.see');
    }

    // public function bloc()
    // {

    //     return view('admin.bloc');
    // }

    public function ajout(Request $request)
    {
        // $data= $request->validate([
        //     'title' => 'string|max:50',
        //     'description' => 'max:500',
        //     'image' => 'image',
        // ]);

        $products = new Product();

        $products->title = $request->get('title');
        $products->description = $request->get('description');
        $products->image = $request->file('image');
        $products->size = $request->get('size');
        $products->quantity = $request->get('quantity');
        $products->price = $request->get('price');

        $products->save();

    //     $panier = new Panier();
    //     $product = Product::find($products->id);

    //     // dd($user);
 
    //     $panier->idproduct = $product->id;
    //     $panier->save();
    //     return $product;
    // // return redirect()->action('AdminController@test');
    return view('admin.congrat');
    }
}
