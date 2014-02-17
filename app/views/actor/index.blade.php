@extends('layout')

@section('content')

<ul>
@foreach($actors as $actor)
	<li>{{ $actor->name }}</li>
@endforeach
</ul>

@stop