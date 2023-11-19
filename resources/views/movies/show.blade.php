@extends('layouts/app')

@section('content')
    <div class="my-8">
        <a href="/movies"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mx-8">
            Retour</a>
    </div>
    <div class="flex">
        <div class="my-8 mx-8 p-2">

            <h2 class="text-3xl my-8">{{ $movie->title }}</h2>
            <strong> Synopsis : </strong>{{ $movie->synopsys }}</br>
            <strong> Durée : </strong>{{ $movie->duration }}</br>
            {{ $movie->youtube }}
            <strong> Sortie : </strong>{{ $movie->released_at }}</br>
        </div>
    </div>
@endsection
