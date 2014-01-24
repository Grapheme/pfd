<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$locale = slang::get();

Route::group(array('prefix' => $locale), function()
{
	Route::get('changeLang/{lang}', function($lang){
		$languages = array('en', 'ch', 'vn');
		if(in_array($lang, $languages)) {
			Session::put('lang', $lang);
		}
		return Redirect::to('/');
		//exit;
	});

	Route::group(array('prefix' => 'admin', 'before' => 'auth'), function()
	{

		Route::resource('statPages', 'StatPagesController');

		Route::get('/', array('uses' => "AdminController@panel"));

		/* ADMIN NEWS */
		Route::get('news', array('uses' => "AdminController@news"));
		Route::get('news/edit/{id}', array('uses' => "AdminController@newsEdit"));
		Route::post('news/edit/{id}', array('uses' => "AdminController@doEdit"));
		Route::get('news/new', array('uses' => "AdminController@newsNew"));
		Route::post('news/new', array('uses' => "AdminController@doNew"));
		Route::get('news/delete/{id}', array('uses' => "AdminController@newsDelete"));

		/* ADMIN PAGES */

		Route::get('pages', array('uses' => "AdminController@pages"));
		Route::get('pages/delete/{id}', array('uses' => "AdminController@pagesDelete"));
		Route::get('pages/edit/{id}', array('uses' => "AdminController@pagesEdit"));
		Route::post('pages/edit/{id}', array('uses' => "AdminController@pagesDoEdit"));
		Route::get('pages/new', array('uses' => "AdminController@pagesNew"));
		Route::post('pages/new', array('uses' => "AdminController@pagesDoNew"));
		
	});
	// Admin Logout
	Route::get('logout', "AdminController@logout");

	/*

	Route::get('down', function() { return View::make('downloads'); });
	Route::get('about', function() { return View::make('about'); });
	Route::get('cfd', function() { return View::make('cfd'); });
	Route::get('chat', function() { return View::make('chat'); });
	Route::get('contacts', function() { return View::make('contacts'); });
	Route::get('forex', function() { return View::make('forex'); });
	Route::get('future', function() { return View::make('future'); });
	Route::get('/', function() { return View::make('index'); });
	Route::get('legal', function() { return View::make('legal'); });
	Route::get('one-news', function() { return View::make('one-news'); });
	Route::get('product', function() { return View::make('product'); });
	Route::get('product-kiwi', function() { return View::make('product-kiwi'); });
	Route::get('product-multi', function() { return View::make('product-multi'); });
	Route::get('reg', function() { return View::make('reg'); });
	Route::get('broker', function() { return View::make('static'); });
	Route::get('support', function() { return View::make('support'); });
	Route::get('white', function() { return View::make('white'); });
	Route::get('withdrawal', function() { return View::make('withdrawal'); });
	Route::get('spread', function() { return View::make('spread'); });

	*/

	Route::get('press', 'HomeController@newsPage');
	Route::get('press{id}', 'HomeController@newsOnePage');
	Route::get('deposit', function() { return View::make('deposit'); });




	Route::get('login', array('as' => 'login', 'uses' => "AdminController@index"));
	Route::post('login', "AdminController@login");
	

	



	Route::get('thanks', function() { return View::make('thanks'); });
	Route::post('neteller', "HomeController@neteller");
	Route::post('contact_send', "HomeController@contact_send");
	Route::post('mam_send', "HomeController@mam_send");

	Route::get('/{page}', 'HomeController@getPage');
	Route::get('/', 'HomeController@getPage');
});

App::missing(function($exception)
{
    return View::make('errors.404');
});