<?php

class StatPage extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'url' => 'required'
	);
}
