@extends('layouts/app')

@section('content')

<h1>Bonjour, je suis Fiorella</h1>

<p>Tu as {{$age}} ans.</p>

@if ($age >= 18)

<p>Tu es majeur(e).</p>
    
@else
    
<p>Tu es mineur(e).</p>
    
@endif

@if ($friend)
    <p>Fiorella joue avec {{ $friend }}.</p>
@endif

    
@endsection