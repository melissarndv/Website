@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/panier.css') }}" rel="stylesheet">
@endsection

@section('content')
<h2>Panier d'achats</h2>

<div class="separator"></div>

<table>
    <tr>
        <th>Produit</th>
        <th>Taille</th>
        <th>Unité(s)</th>
        <th>Prix</th>
    </tr>
    <tr>
    <td><img class="img" src="{{$product->image->url()}}"/></td>
    <td>{{$product->size}}</td>
        <td>x</td>
        <td>xx,xx€</td>
    </tr>
</table>

<div class="total">
    <p>Total panier : xx,xx€</p>
    <input class="button" type="submit" value="Commander" style="width: 120px;"/>
</div>
@endsection