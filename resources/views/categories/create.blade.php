@extends('layouts/app')

@section('content')
    <form action="" method="post">
        @csrf {{--Permet de bloquer la faille CSRF--}}
        <input type="text" name="name">
        <button>Sauvegarder</button>
    </form>
@endsection