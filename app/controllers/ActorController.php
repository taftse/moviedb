<?php

class ActorController extends BaseController {

	public function index()
	{
		return View::make('actor.index', [
			'actors' => Actor::all()
		]);
	}

	public function view($id)
	{
		return View::make('actor.show', [
			'actor' => Actor::find($id)
		]);
	}

	public function create()
	{
		return View::make('actor.create');
	}

	public function store()
	{
		$actor = new Actor;
		$actor->name = Input::get('name');
		$actor->save();

		return Redirect::route('actor.index');
	}

	public function edit($id)
	{
		return View::make('actor.edit', [
			'actor' => Actor::find($id)
		]);
	}

	public function update($id)
	{
		$actor = Actor::find($id);
		$actor->name = Input::get('name');
		$actor->save();

		return Redirect::route('actor.index');
	}

	public function destroy($id)
	{
		$actor = Actor::find($id);
		$actor->delete();

		return Redirect::route('actor.index');
	}

}