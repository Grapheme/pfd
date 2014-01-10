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

	public function index()
	{
				/*if($_GET['pass'] == $user[0]->pass) {
					return Redirect::to('user/login');
				}*/
		
				
				/*if (Auth::check())
				{
				     return "You're logged in!";
				}*/
		if (Auth::check())
		{
			return Redirect::to('panel');
		} else {
			return View::make('admin.login');
		}
	}

	public function login() {
		if (Auth::attempt(array('user' => Input::get('user'),'password' => Input::get('password') )))
		{
		    return Redirect::to('panel');
		} else {
			echo "Your password or user are not correct";
		}

		if (Auth::check())
		{
		    return Redirect::to('panel');
		}
	}

	public function panel() {
		return View::make('admin.panel');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}
}