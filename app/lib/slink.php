<?php

class slink {

	public static function to($link)
	{

		$locale = slang::get();

		$string = $locale."/".$link;

		if (Request::secure())
		{
			return secure_asset($string);
		} else {
			return asset($string);
		}
	}

	public static function path($link)
	{
		
			return asset($link);

	}
}