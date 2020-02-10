@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/produit.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="global">

    <div class="img">
        <p><img class="photo" alt="Chargement" src="{{$product->image->url()}}"/></p>
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;

    <div class="div2">

        <h1>{{$product->title}}</h1>
        {{-- <div class="promo">
            -40% DE REDUCTION AVEC LE CODE: LOREM40 !
        </div> --}}

        &nbsp;

        <div class="price">
            {{-- <span class="reduc">xx,xx€</span> --}}
            <span class="reduc">{{$product->price}}€</span>
        </div>

        &nbsp;

        <div class="cat">
                <p>
                <label for="Taille">Taille :</label>
                <select class="button" name="Taille" id="Taille">
                    <option class="mcdo" xsvalue="Sélection">Sélectionnez votre taille</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
                </p>
            <p>Catégorie : Lorem</p>
            <p>Disponibilité : {{$product->quantity}}</p>
            <select class="button" name="qtit" style="width: 120px;">
                <option xsvalue="qtit">Quantité</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <input class="button" type="submit" value="Ajouter au panier" style="width: 120px;"/>
        </div>

       

        &nbsp;

        <div class="description">
            <h4>Description :</h4>
                {{$product->description}}
        </div>
        &nbsp;
        <div class="compo">
            <h4>Composition et entretien :</h4>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin rhoncus ex sit amet ultricies faucibus.
                Nunc vel orci sed lorem aliquet aliquet vitae in eros.
                Nam maximus tortor id lectus placerat, vel iaculis dui hendrerit.
        </div>
    </div>
</div>
@endsection