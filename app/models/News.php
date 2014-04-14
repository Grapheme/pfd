<?php

class News extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	protected $guarded = array();  // Important


	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getNews()
	{
		return true;
	}

}