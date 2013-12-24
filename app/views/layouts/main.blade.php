<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PFD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
		<link rel="stylesheet" href="<?=URL::to('css/fonts.css');?>">
        <link rel="stylesheet" href="<?=URL::to('css/normalize.css');?>">
        <link rel="stylesheet/less" type="text/css" href="<?=URL::to('less/main.less');?>">
        <link href="<?=URL::to('css/fotorama.css');?>" rel="stylesheet">
		<script src="<?=URL::to('js/vendor/less-1.5.0.min.js');?>"></script>
        <script src="<?=URL::to('js/vendor/modernizr-2.6.2.min.js');?>"></script>
    <body class="main">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <article class="@yield('wrapper')">
        	<header>
        		<div class="header-top clearfix">
        			<a href="./" class="logo-div"></a>
        			<div class="lang-div">
        				<!--<div class="search">
	        				<div class="search-img">
	        					<div class="search-main"></div>
	        					<div class="search-line"></div>
	        				</div>
	        				<div class="lang-ul">
	        					<div class="lang-triangle"></div>
	        					<div class="active-lang" data-lang="en">EN</div>
	        					<div class="option-lang">
	        					<div class="lang-item" data-lang="zh-cn">中文</div>
	        					</div>
	        					<form class="hidden">
	        						<select>
	        							<option value="en">en
	        							<option value="zh-cn">cn
	        						</select>
	        					</form>
	        				</div>
	        			</div>-->
	        			<div class="search-open">
	        				<input class="search-input" type="text" placeholder="search">
	        			</div>
        				<div class="sign">
        					<a href="#" class="sign-up js-open-sign">Sign up</a>
        				</div>
        			</div>
        		</div>
	        	<div class="header-nav">
	        		<nav>
	        			<ul>
	        				<li><a href="about">About Us</a>
	        					<ul class="header-sub-menu">
	        						<li><a href="white">White label</a>
	        						<li><a href="broker">Introducing broker</a>
	        						<li><a href="press">Press room</a>
	        					</ul>
	        				<li><a href="#">Platform</a>
	        					<ul class="header-sub-menu">
	        						<li><a href="product-kiwi">Kiwi trader</a>
	        						<li><a href="product">PFD trader (MT4)</a>
	        						<li><a href="product-multi">Multi Account Manager</a>
	        					</ul>
	        				<li><a href="#">Products</a>
	        					<ul class="header-sub-menu">
	        						<li><a href="forex">Forex</a>
	        						<li><a href="cfd">CFD</a>
	        						<li><a href="future">Futures CFDs</a>
	        					</ul>
	        				<li><a href="#">Operations</a>
	        					<ul class="header-sub-menu">
	        					    <!--WHAT is this!?
									<li><a href="#">Discretionary Authority</a>
									-->
	        					    <li><a href="deposit">Deposit Options</a>
	        					    <li><a href="withdrawal">Withdrawals</a>
	        					    <li><a href="support">Technical Support</a>
	        					    <li><a href="chat">Chat/Phone Trading</a>
	        					</ul>
	        				<li><a href="product-multi">MAM</a>
	        				<li><a href="spread">Spread Comprasion</a>
	        				<li><a href="contacts">Contact</a>
	        			</ul>
	        		</nav>
	        		<div class="shadow"></div>
	        	</div>
	        </header>
	        <div class="sign-up-open">
	        	<div class="sign-close js-close-sign">
	        		<div class="sign-close-one"></div>
	        		<div class="sign-close-two"></div>
	        	</div>
	        	<ul>
	        		<li>
	        			<a href="reg#paper" class="traider-link">
	        				<span class="f_header">Paper mode account</span>
	        				<span class="desc">Once you have decided which of the account forms are right for you, please download the corresponding PDF form from our website right here. Now you can proceed and fill the account opening form.</span>
	        			</a>
	        		<li>
	        			<a href="reg#online" class="traider-link">
	        				<span class="f_header">Online sign up</span>
	        				<span class="desc">Online sign up is intended to be completed in conjunction with the relevant provisions of Pacific Financial Derivative Limited’s Individual Account Client Services Agreement Individual Account. First step is to register user name, password and email id.</span>
	        			</a>
	        		<li>
	        			<a href="reg#demo" class="traider-link">
	        				<span class="f_header">Demo account</span>
	        				<span class="desc">Test your trading strategies in a real-time environment and familiarize yourself with all the features of PFD Demonstrations's PFDTrader - with no risk and no obligation. Register below and we'll give you PFD Demonstrations's $50,000 virtual margin deposit and access to a fully functional version of PFDTrader for the next 15-days.</span>
	        			</a>
	        	</ul>
	        </div>

        @yield('content')
		
			<footer class="main-footer">
	        	<div class="footer-content cleafix">
	        		<div class="ftr-top clearfix">
		        		<ul class="ftr-links-list">
		        			<li class="ftr-links-item"><a href="">Home</a>
		        			<li class="ftr-links-item"><a href="product-multi">MAM</a>
		        			<li class="ftr-links-item"><a href="legal">Legal</a>
		        			<li class="ftr-links-item"><a href="spread">Spread comparison</a>
		        			<li class="ftr-links-item"><a href="product">Meta trader 4</a>
		        			<li class="ftr-links-item"><a href="contacts">Contact</a>
		        		</ul>
		        		<ul class="ftr-links-list about-us">
		        			<li class="ftr-links-item list-head">About Us</a>
		        			<li class="ftr-links-item"><a href="about">Welcome</a>
		        			<li class="ftr-links-item"><a href="white">White label</a>
		        			<li class="ftr-links-item"><a href="static">Introducing broker</a>
		        			<li class="ftr-links-item"><a href="press">Press room</a>
		        		</ul>
		        		<ul class="ftr-links-list products">
		        			<li class="ftr-links-item list-head">Products
		        			<li class="ftr-links-item"><a href="forex">Forex</a>
		        			<li class="ftr-links-item"><a href="future">Features</a>
		        		</ul>
		        		<ul class="ftr-links-list operations">
		        			<li class="ftr-links-item list-head">Operations
		        			<li class="ftr-links-item"><a href="reg">Open an account</a>
		        			<li class="ftr-links-item"><a href="#">Deposit options</a>
		        			<li class="ftr-links-item"><a href="withdrawal">With drawals</a>
		        			<li class="ftr-links-item"><a href="support">Technical support</a>
		        			<li class="ftr-links-item"><a href="chat">Phone trading</a>
		        		</ul>
	        		</div>
	        		<div class="ftr-copyright">
	        			&copy; 2013 Pacific Financial Derivatives Ltd. All Rights Reserved.
	        		</div>
	        	</div>
	        </footer>
		
		</div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?=URL::to('js/vendor/fotorama.js');?>"></script>
        @yield('scripts')
        <script src="<?=URL::to('js/plugins.js');?>"></script>
        <script src="<?=URL::to('js/main.js');?>"></script>