@extends('layouts/app')


@section('content')

<h1>A propos de {{$title}} </h1>


    <ul>
    @foreach ($team as $member)

    <li> <img src="{{$member['image']}}" alt="{{$member['name']}}"><a href="/a-propos/{{ $member['name'] }}">{{ $member['name'] }}({{ $member['job'] }})</a></li>

    @endforeach
    </ul>

@endsection