@extends('layout')

@section('content')

	{{ Form::open(['route' => 'actor.store']) }}
	@include('actor._form');
	{{ Form::close() }}

@stop