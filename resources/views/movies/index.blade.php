@extends('layouts/app')

@section('content')

<h1 class="text-5xl my-12 mx-8">Nos films</h1>

    <div class="flex">
        @foreach ($movies as $movie)
            <div class="border-4 rounded-lg border-indigo-500 my-8 mx-8 p-2">
                <a href="/movies/{{$movie->title}}">  <h2 class="text-3xl my-8">{{$movie->title}}</h2>
                {{$movie->synopsys}}
                {{$movie->duration}}
                {{$movie->youtube}}
                {{$movie->released_at}}
            </div></a>
        @endforeach
    </div>
    <a href="/movies/creer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mx-8">
        Créer un film</a>
    
@endsection