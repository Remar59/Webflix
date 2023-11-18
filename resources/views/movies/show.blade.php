@extends('layouts/app')

@section('content')
    <div class="flex">
        <div class="border-4 rounded-lg border-indigo-500 my-8 mx-8 p-2">
            <h2 class="text-3xl my-8">{{ $movie->title }}</h2>
            <strong> Synopsis : </strong>{{ $movie->synopsys }}
            {{ $movie->duration }}
            {{ $movie->youtube }}
            {{ $movie->released_at }}
        </div>
    </div>
@endsection
