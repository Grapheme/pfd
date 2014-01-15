<?php

class slang {

	public static function get()
	{
		$languages = array('en','ch','vi');

		$locale = Request::segment(1);
		if(in_array($locale, $languages)){
			App::setLocale($locale);
		}else{
			$locale = null;
		}

		return $locale;
	}
}