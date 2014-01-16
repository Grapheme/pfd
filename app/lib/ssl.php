<?php

class ssl {

	public static function is() {

	   	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on")
	   	{
	   		return true;
	   	} else {
	   		return false;
	   	}
	}
}