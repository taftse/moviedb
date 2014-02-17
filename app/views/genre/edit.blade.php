@extends('layout')

@section('content')

	{{ Form::model($actor, ['route' => 'genre.update']) }}
	@include('genre._form');
	{{ Form::close() }}

@stop