@extends('layouts/app')

@section('content')
@foreach ($errors->all() as $error)
{{$error}}
    
@endforeach
    <form action="" method="post">
        @csrf {{--Permet de bloquer la faille CSRF--}}
        <input type="text" name="name">
        <button>Sauvegarder</button>
    </form>
@endsection