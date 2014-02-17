@extends('layout')

@section('content')

	{{ Form::model($actor, ['route' => 'actor.update']) }}
	@include('actor._form');
	{{ Form::close() }}

@stop