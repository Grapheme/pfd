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

	public function getPage($page = null)
	{
		if($page == null) {
			$page = StatPage::where('url', 'index')->firstOrFail();
			$data = array('page' => $page);
			return View::make('pages', $data);
		} else {
			if(!$page = StatPage::where('url', $page)->first())
			{
				App::abort(404);
				exit;
			}
			$data = array('page' => $page);
			return View::make('pages', $data);
		}
	}

	public function contact_send()
	{
		$name = Input::get('name');
		$email = Input::get('email');
		$text = Input::get('text');
		
		$data = array(	'name' => $name,
						'email' => $email,
						'text' => $text
						);
    	Mail::send('emails.contact', $data, function($message) use ($email)
		{
    		$message->from($email);
	    	$message->to('admin@pfd-nz.com')->subject('PFD - Message from site');
		});
	}

	public function mam_send()
	{
		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');
		$email = Input::get('email');
		$phone = Input::get('phone');
		$company = Input::get('company');
		$country = Input::get('country');
		
		$data = array(	'firstname' => $firstname,
						'lastname' => $lastname,
						'email' => $email,
						'phone' => $phone,
						'company' => $company,
						'country' => $country,
						);
    	Mail::send('emails.mam', $data, function($message) use ($email)
		{
    		$message->from($email);
	    	$message->to('admin@pfd-nz.com')->subject('PFD - APPLY FOR MAM ACCESS');
		});
	}

	public function newsPage() {
		$news = News::all();
		return View::make('press', array('news' => $news, 'action' => ''));
	}

	public function newsOnePage($id) {
		$news = News::all();
		$oneNews = News::find($id);
		return View::make('press', array('news' => $news, 'oneNews' => $oneNews, 'action' => 'one'));
	}
	
	public function neteller() {
		
		$postdata = http_build_query(
	    array(
	        'version' => '4.1',
	        'merchant_id' => @$_REQUEST['merchant_id'],
	        'merch_key' => @$_REQUEST['merch_key'],
	        'merch_transid' => @$_REQUEST['merch_transid'],
	        'merch_name' => @$_REQUEST['merch_name'],
	        'amount' => @$_REQUEST['amount'],
	        'currency' => @$_REQUEST['currency'],
	        'net_account' => @$_REQUEST['net_account'],
	        'secure_id' => @$_REQUEST['secure_id'],
	        'button' => @$_REQUEST['button'],
	        'pfd_account' => @$_REQUEST['custom_1']
	    )
		);
		
		$opts = array('http' =>
		    array(
		        'method'  => 'POST',
		        'header'  => 'Content-type: application/x-www-form-urlencoded',
		        'content' => $postdata
		    )
		);
			
		$context  = stream_context_create($opts);
		
		$result = file_get_contents('https://api.neteller.com/netdirect', false, $context);
	
		if ( @$_REQUEST['debug'] == 1 ) {
			echo "\n --------------POST data----------------- \n";
			print_r(array(
		        'version' => '4.1',
		        'merchant_id' => @$_REQUEST['merchant_id'],
		        'merch_key' => @$_REQUEST['merch_key'],
		        'merch_transid' => @$_REQUEST['merch_transid'],
		        'merch_name' => @$_REQUEST['merch_name'],
		        'amount' => @$_REQUEST['amount'],
		        'currency' => @$_REQUEST['currency'],
		        'net_account' => @$_REQUEST['net_account'],
		        'secure_id' => @$_REQUEST['secure_id'],
		        'button' => @$_REQUEST['button'],
		        'pfd_account' => @$_REQUEST['custom_1']
		    ));
			echo "\n --------------XML response-------------- \n";
			echo($result);
			exit;
		}
		/*
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', 'merch_transid: ' . @$_REQUEST['merch_transid'] . "\n", FILE_APPEND | LOCK_EX);
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', 'amount: ' . @$_REQUEST['amount'] . "\n", FILE_APPEND | LOCK_EX);
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', 'net_account: ' . @$_REQUEST['net_account'] . "\n", FILE_APPEND | LOCK_EX);
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', 'secure_id: ' . @$_REQUEST['secure_id'] . "\n", FILE_APPEND | LOCK_EX);
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', 'PFD account number: ' . @$_REQUEST['detail1_text'] . "\n\n", FILE_APPEND | LOCK_EX);
		
		file_put_contents(getcwd()."/neteller/". time() . '_neteller.txt', $result, FILE_APPEND | LOCK_EX);
		*/
		header('Content-type: text/xml');
		echo($result);
	}
}