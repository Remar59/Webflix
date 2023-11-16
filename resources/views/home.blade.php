@extends('layouts/app')

{{-- Prend le contenu de content pour le placer dans app -> yield--}}

@section('content')
    

    <h1>Hello {{ $name }} </h1>
    <ul>
    @foreach ($games as $game)

    <li> {{ $game }}</li>

    @endforeach
    </ul>
    @endsection