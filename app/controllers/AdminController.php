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
		$news = News::create(array(
			'title' => Input::get('title'), 
			'text' => Input::get('text'), 
			'desc' => Input::get('desc')
			));
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

	public function pages() {
		$pages = Page::all();
		return View::make('admin.pages', array('pages' => $pages, 'action' => ''));
	}

	public function pagesEdit($id) {
		$pages = Page::find($id);
		return View::make('admin.pages', array('pages' => $pages, 'action' => 'edit'));
	}

	public function pagesDoEdit($id) {
		$pages = Page::find($id);
		$pages->name = Input::get('name');
		$pages->url = Input::get('url');
		$pages->scripts = Input::get('scripts');
		$pages->meta_en = Input::get('meta_en');
		$pages->meta_ch = Input::get('meta_ch');
		$pages->meta_vi = Input::get('meta_vi');
		$pages->content = Input::get('content_en');
		$pages->content = Input::get('content_ch');
		$pages->content = Input::get('content_vi');
		$pages->wrapper = Input::get('wrapper');
		$pages->save();
		return Redirect::to('admin/pages');
	}

	public function pagesNew() {
		return View::make('admin.pages', array('action' => 'new'));
	}

	public function pagesDelete($id) {
		Page::destroy($id);
		return Redirect::to('admin/pages');
	}

	public function pagesDoNew() {
		$pages = Page::create(array(
			'name' => Input::get('name'),
			'url' => Input::get('url'),
			'scripts' => Input::get('scripts'),
			'meta' => Input::get('meta_en'),
			'meta' => Input::get('meta_ch'),
			'meta' => Input::get('meta_vi'),
			'content' => Input::get('content_en'),
			'content' => Input::get('content_ch'),
			'content' => Input::get('content_vi'),
			'wrapper' => Input::get('wrapper')
			));
		return Redirect::to('admin/pages');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('login');
	}
}