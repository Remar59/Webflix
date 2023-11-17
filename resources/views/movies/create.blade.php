@extends('layouts/app')

@section('content')
@foreach ($errors->all() as $error)
{{$error}}
    
@endforeach
    <form action="" method="post">
        @csrf {{--Permet de bloquer la faille CSRF--}}
        Titre<input type="text" name="title"></br></br>
        Résumé<input type="text" name="synopsys"></br></br>
        Durée<input type="text" name="duration"></br></br>
        Lien youtube<input type="text" name="youtube"></br></br>
        Date de sortie<input type="date" name="released_at"></br></br>
        <button>Sauvegarder</button>
    </form>
@endsection