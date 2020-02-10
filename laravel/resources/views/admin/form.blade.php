@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('content')

@if (Auth::user() && Auth::user()->is_admin == 1)
<div id="addiv">
    <h2 align="center">Add New Product</h2>
    <form action="{{ action('AdminController@ajout')}}"  method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset>
            <br/><label for="Titre">Titre:
                <input type="text" placeholder="Titre" name="title"
                required
                size="15">
            <br/><label for="Description">Description:
                <input type="text" placeholder="Description" name="description"
                required
                size="40">
            <br/><label for="Image">Image:
                <input type="file" placeholder="Image" name="image"
                required
                size="20">
                <br/><label for="Taille">Taille:
                    <input type="text" placeholder="Taille" name="size"
                    required
                    size="20">
            <br/><label for="Quantité">Quantité:
                        <input type="number" placeholder="Quantité" name="quantity"
                        required
                        size="20">
            <br/><label for="Prix">Prix:
                            <input type="number" placeholder="Prix" name="price"
                            required
                            size="20">
                <p><input type="submit" value="Enregistrer"></p>
                </fieldset>
    </form>
    </div>

    @else
    <h1>test<h2>
    @endif 
    @endsection