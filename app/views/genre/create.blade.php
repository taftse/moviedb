@extends('layout')

@section('content')

	{{ Form::open(['route' => 'genre.store']) }}
	@include('genre._form');
	{{ Form::close() }}

@stop