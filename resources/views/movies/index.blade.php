@extends('layouts/app')

@section('content')

<h1 class="text-5xl my-12">Nos films</h1>

<a href="/movies/creer" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
Créer un film</a>

    <div cla>
        @foreach ($movies as $movie)
            <div class="border-4 rounded-lg border-indigo-500 my-6">
                <h2 class="text-3xl my-8">{{$movie->title}}</h2>
                {{$movie->synopsys}}
                {{$movie->duration}}
                {{$movie->youtube}}
                {{$movie->released_at}}
            </div>
        @endforeach
    </div>
    
@endsection