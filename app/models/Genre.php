<?php

class Genre extends Eloquent {

	/**
	 * A Genre can belong to many Movie's
	 * 
	 * @return Collection
	 */
	public function movies()
	{
		return $this->belongsToMany('Movie');
	}

}