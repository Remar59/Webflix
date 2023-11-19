@extends('layouts/app')

@section('content')

<h1>Nos catégories</h1>
<a href="/categories/creer">Créer une catégorie</a>

    <div class="flex">
        @foreach ($categories as $category)
            <div class="border-4 rounded-lg border-indigo-500 my-8 mx-8 p-2">
                <h2>{{$category->name}}</h2>
            </div>
        @endforeach
    </div>
    
@endsection