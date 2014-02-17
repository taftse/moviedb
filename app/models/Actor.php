<?php

class Actor extends Eloquent {

	/**
	 * An actor can be in many Movies
	 * 
	 * @return Collection
	 */
	public function movies()
	{
		return $this->belongsToMany('Movie');
	}

}