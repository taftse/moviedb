@extends('layout')

@section('content')

<ul>
@foreach($movies as $movie)
	<li>{{ $movie->name }}</li>
@endforeach
</ul>

@stop