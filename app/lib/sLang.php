<?php

class slang {

	public static function get($array = false)
	{
		$languages = array('en','ch','vn','ru');
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

		
		if($array) {
			return $languages;
		} else {
			return $locale;
		}
	}

	public static function link($lang) {
		$languages = sLang::get(true);
		$path = Request::path();
		$segment = Request::segment(1);

		if(in_array($segment, $languages)) {
			$exPath = explode("/", $path);
			$clearPath = "";
			for($i = 0; $i < count($exPath); $i++) {
				if($i!=0)
				{
					$clearPath .= $exPath[$i]."/";
				}
			}
			return "/".$lang."/".$clearPath;
		} else {
			return "/".$lang."/".$path;
		}
	}
}