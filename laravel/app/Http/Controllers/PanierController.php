<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Catalog;
use App\Model\Panier;
use App\User;


class PanierController extends Controller
{
    public function panier($product)
    {
        $prod = Product::where('id', $product)->firstOrFail();
        return view('panier.see')->withProduct($prod);
    }
    // public function id()
    // {
    //     $panier = new Panier();
    //     $product = Product::find($products->id);
    //     $user = User::find($user->id);

    //     $panier->idproduct = $product->id;
    //     $panier->iduser = $user->id;
    //     $panier->save();
    //     return $product;
    //     return $user;
    // // return re
    // }
}
