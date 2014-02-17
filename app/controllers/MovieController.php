<?php

class MovieController extends BaseController {

	public function index()
	{
		return View::make('movie.index', [
			'movies' => Movie::all()
		]);
	}

	public function view($id)
	{
		return View::make('movie.show', [
			'movie' => Actor::find($id)
		]);
	}

	public function create()
	{
		return View::make('movie.create');
	}

	public function store()
	{
		$movie = new Movie;
		$movie->name = Input::get('name');
		$movie->save();

		return Redirect::route('movie.index');
	}

	public function edit($id)
	{
		return View::make('movie.edit', [
			'movie' => Movie::find($id)
		]);
	}

	public function update($id)
	{
		$movie = Movie::find($id);
		$movie->name = Input::get('name');
		$movie->save();

		return Redirect::route('movie.index');
	}

	public function destroy($id)
	{
		$movie = Movie::find($id);
		$movie->delete();

		return Redirect::route('movie.index');
	}

}