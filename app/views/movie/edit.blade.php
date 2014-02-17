@extends('layout')

@section('content')

	{{ Form::model($actor, ['route' => 'movie.update']) }}
	@include('movie._form');
	{{ Form::close() }}

@stop