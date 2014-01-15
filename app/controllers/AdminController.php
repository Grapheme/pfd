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
			return Redirect::to('admin');
		} else {
			return View::make('admin.login');
		}
	}

	public function login() {
		if (Auth::attempt(array('user' => Input::get('user'),'password' => Input::get('password') )))
		{
		    return Redirect::to('admin');
		} else {
			echo "Your password or user are not correct";
		}

		if (Auth::check())
		{
		    return Redirect::to('admin');
		}
	}

	public function panel() {
		return View::make('admin.panel');
	}

	public function news() {
		$news = News::all();
		return View::make('admin.news', array('news' => $news, 'action' => ''));
	}

	public function newsEdit($id) {
		$news = News::find($id);
		return View::make('admin.news', array('news' => $news, 'action' => 'edit'));
	}

	public function newsNew() {
		return View::make('admin.news', array('action' => 'new'));
	}

	public function doNew() {
		$news = News::create(array('title' => Input::get('title'), 'text' => Input::get('text'), 'desc' => Input::get('desc')));
		return Redirect::to('admin/news');
	}

	public function doEdit($id) {
		$news = News::find($id);
		$news->title = Input::get('title');
		$news->text = Input::get('text');
		$news->desc = Input::get('desc');
		$news->created_at = Input::get('date');
		$news->save();
		return Redirect::to('admin/news');
	}

	public function newsDelete($id) {
		News::destroy($id);
		return Redirect::to('admin/news');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}
}