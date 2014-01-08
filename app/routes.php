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
Route::get('press', function() { return View::make('press'); });
Route::get('product', function() { return View::make('product'); });
Route::get('product-kiwi', function() { return View::make('product-kiwi'); });
Route::get('product-multi', function() { return View::make('product-multi'); });
Route::get('reg', function() { return View::make('reg'); });
Route::get('broker', function() { return View::make('static'); });
Route::get('support', function() { return View::make('support'); });
Route::get('white', function() { return View::make('white'); });
Route::get('withdrawal', function() { return View::make('withdrawal'); });
Route::get('spread', function() { return View::make('spread'); });
Route::get('deposit', function() { return View::make('deposit'); });

Route::get('thanks', function() { return View::make('thanks'); });

Route::post('neteller', "HomeController@neteller");
Route::post('contact_send', "HomeController@contact_send");