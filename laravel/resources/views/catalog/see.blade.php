@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/catalogue.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h1 class="cattitle" >CATALOGUE</h1>
    <div class="box">
@foreach ($products as $product)
        <div class="card">
            <a href="/product/{{$product->id}}"><img src="{{$product->image->url()}}" alt="ton image"/></a>
            <p class="align"><b>{{$product->title}}</b></p>
            <input class="button" type="button" value="Achat direct" OnClick="window.location.href='/product/{$product->id}'"/>
        </div>  
@endforeach
    </div>
@endsection