<?php

class GenreController extends BaseController {

	public function index()
	{
		return View::make('genre.index', [
			'genres' => Genre::all()
		]);
	}

	public function view($id)
	{
		return View::make('genre.show', [
			'genre' => Actor::find($id)
		]);
	}

	public function create()
	{
		return View::make('genre.create');
	}

	public function store()
	{
		$genre = new Genre;
		$genre->name = Input::get('name');
		$genre->save();

		return Redirect::route('genre.index');
	}

	public function edit($id)
	{
		return View::make('genre.edit', [
			'genre' => Genre::find($id)
		]);
	}

	public function update($id)
	{
		$genre = Genre::find($id);
		$genre->name = Input::get('name');
		$genre->save();

		return Redirect::route('genre.index');
	}

	public function destroy($id)
	{
		$genre = Genre::find($id);
		$genre->delete();

		return Redirect::route('genre.index');
	}

}