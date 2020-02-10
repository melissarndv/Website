@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
    <h2>Votre atricle à été ajouté à la base de donnée!</h2><br/>
    <a href="/admin">Ajouter un nouvel article</a>
    </div>
@endsection