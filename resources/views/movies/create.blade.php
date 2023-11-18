@extends('layouts/app')

@section('content')
@foreach ($errors->all() as $error)
{{$error}}
    
@endforeach

    <form action="" method="post" class="flex-col my-8 mx-8">
        @csrf {{--Permet de bloquer la faille CSRF--}}
        Titre : </br><input type="text" name="title"></br></br>
        Résumé : </br><input type="text" name="synopsys"></br></br>
        Durée : </br><input type="text" name="duration"></br></br>
        Lien youtube : </br><input type="text" name="youtube"></br></br>
        Date de sortie : </br><input type="date" name="released_at"></br></br>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mx-8">Sauvegarder</button>
    </form>
@endsection