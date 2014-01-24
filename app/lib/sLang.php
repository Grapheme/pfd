<?php

class slang {

	public static function get()
	{
		$languages = array('en','ch','vn');
		$locale = Request::segment(1);

		if(in_array($locale, $languages)) {
			Session::put('lang', $locale);
			App::setLocale(Session::get('lang'));
		} else {
			if(!is_null(Session::get('lang')))
			{
				Redirect::to(trim(Session::get('lang').'/'.Request::path(), '/'), 301)->send();
			} else {
				$locale = null;
			}
		}

		

		return $locale;
	}
}