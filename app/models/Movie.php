<?php

class Movie extends Eloquent {

	/**
	 * A Movie can have many Actor's
	 * 
	 * @return Collection
	 */
	public function actors()
	{
		return $this->hasMany('Actor');
	}

}