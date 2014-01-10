<?php

class AdminController extends BaseController {

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

	public function login()
	{
				/*if($_GET['pass'] == $user[0]->pass) {
					return Redirect::to('user/login');
				}*/

				if (Auth::attempt(array('user' => 'admin','password' => '123456')))
				{
				    echo 1;
				} else {
					echo 2;
				}
				if (Auth::check())
				{
				     return "You're logged in!";
				}
			return View::make('admin.login');
	}
}