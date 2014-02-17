@extends('layout')

@section('content')

	{{ Form::open(['route' => 'movie.store']) }}
	@include('movie._form');
	{{ Form::close() }}

@stop