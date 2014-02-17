@extends('layout')

@section('content')

<ul>
@foreach($genres as $genre)
	<li>{{ $genre->name }}</li>
@endforeach
</ul>

@stop