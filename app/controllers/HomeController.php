<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function contact_send()
	{
		$name = Input::get('name');
		$email = Input::get('email');
		$text = Input::get('text');
		
		$data = array(	'name' => $name,
						'email' => $email,
						'text' => $text
						);
    	Mail::send('emails.contact', $data, function($message)
		{
    	$message->from('pfd-nz@yandex.ru', 'PFD');
	    $message->to('kd@grapheme.ru')->subject('Message from site!');
		});
	}
}