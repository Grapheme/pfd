<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('meta')
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Author" content="Pacific Financial Derivatives Ltd."/>
		<meta name="Copyright" content="Pacific Financial Derivatives Ltd."/>
		<meta name="Email" content="info@pfd-nz.com"/>
		<meta name="Distribution" content="Global"/>
		<meta name="Rating" content="General"/>
		<meta name="Language" content="en"/>
		<meta name="google-site-verification" content="ULOfWrgfRc-WcGFRkRXPBacWaucFLF_OOXc0Yx3JkI8" />
		<meta name="msvalidate.01" content="8DC20B3DBB489C542A9C57883A7C16B5" />
		<meta name="DC.title" content="Tight FX spreads, Regulated FX broker , Best execution broker, Fx trading, Nz derivatives broker, Nz futures broker, System trading broker" />
		<meta name="geo.region" content="NZ-AUK" />
		<meta name="geo.position" content="-36.904472;174.74346" />
		<meta name="ICBM" content="-36.904472, 174.74346" />
		<meta name="alexaVerifyID" content="e8CVzPl22NmC66poVlA1IgSW0PY" />
		<link href="<?=slink::path('favicon.ico');?>" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="<?=slink::path('css/fonts.css');?>">
        <link rel="stylesheet" href="<?=slink::path('css/normalize.css');?>">
        <link rel="stylesheet/less" type="text/css" href="<?=slink::path('less/main.less');?>">
        <link href="<?=slink::path('css/fotorama.css');?>" rel="stylesheet">
		<script src="<?=slink::path('js/vendor/less-1.5.0.min.js');?>"></script>
        <script src="<?=slink::path('js/vendor/modernizr-2.6.2.min.js');?>"></script>
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
	        				<li><a href="#">About Us</a>
	        					<ul class="header-sub-menu">
	        						<li><a href="about">Company profile</a>
	        						<li><a href="white">White label</a>
	        						<li><a href="broker">Introducing broker</a>
	        						<li><a href="press">Press room</a>
	        					</ul>
	        				<li><a href="#">Platforms</a>
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
	        				<li><a href="spread">Spreads Comparison</a>
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
	        			<a href="reg#demo" class="traider-link">
	        				<span class="f_header">Demo account</span>
	        				<span class="desc">Test your trading strategies in a real-time environment and familiarize yourself with all the features of PFD Demonstrations's PFDTrader - with no risk and no obligation. Register below and we'll give you PFD Demonstrations's $50,000 virtual margin deposit and access to a fully functional version of PFDTrader for the next 15-days.</span>
	        			</a>
	        		<li>
	        			<!--<a href="reg#online" class="traider-link">-->
	        				<a href="https://kiwi.pfd-nz.com/signup/logon" class="traider-link">
	        				<span class="f_header">Online sign up</span>
	        				<span class="desc">Online sign up is intended to be completed in conjunction with the relevant provisions of Pacific Financial Derivative Limited’s Individual Account Client Services Agreement Individual Account. First step is to register user name, password and email id.</span>
	        			</a>
	        		<li>
	        			<a href="reg#paper" class="traider-link">
	        				<span class="f_header">Paper mode account</span>
	        				<span class="desc">Once you have decided which of the account forms are right for you, please download the corresponding PDF form from our website right here. Now you can proceed and fill the account opening form.</span>
	        			</a>
	        	</ul>
	        </div>

        @yield('content')
		
			<footer class="main-footer">
	        	<div class="footer-content cleafix">
	        		<div class="ftr-top clearfix">
		        		<ul class="ftr-links-list">
		        			<li class="ftr-links-item"><a href="./">Home</a>
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
		        			<li class="ftr-links-item"><a href="broker">Introducing broker</a>
		        			<li class="ftr-links-item"><a href="press">Press room</a>
		        		</ul>
		        		<ul class="ftr-links-list products">
		        			<li class="ftr-links-item list-head">Products
		        			<li class="ftr-links-item"><a href="forex">Forex</a>
    						<li class="ftr-links-item"><a href="cfd">CFD</a>
    						<li class="ftr-links-item"><a href="future">Futures CFDs</a>
		        		</ul>
		        		<ul class="ftr-links-list operations">
		        			<li class="ftr-links-item list-head">Operations
		        			<li class="ftr-links-item"><a href="reg">Open an account</a>
		        			<li class="ftr-links-item"><a href="deposit">Deposit options</a>
		        			<li class="ftr-links-item"><a href="withdrawal">Withdrawals</a>
		        			<li class="ftr-links-item"><a href="support">Technical support</a>
		        			<li class="ftr-links-item"><a href="chat">Phone trading</a>
		        		</ul>
	        		</div>
	        		<div class="ftr-copyright">
	        			&copy; 2013 Pacific Financial Derivatives Ltd. All Rights Reserved.
	        		</div>
	        		<a href="./" class="ftr-logo"></a>
	        	</div>

	        	<!--do not modify this script -->
				<div class='nanorep_loadingData' id='nanoRepProxyContainer' style='position:absolute;top:-500px;left:0px;'></div>
				<script type='text/javascript'>var _nRepData = _nRepData || []; _nRepData['kb'] = '23452028'; _nRepData['float'] = {account: 'pfdnz', cdcVersion: 3, cdcFrame: '', scriptVersion: '2.22.2.31'}
				/* API here */;
				(function(){var windowLoadFunc = function(){var _nRepData = window._nRepData || [];_nRepData['windowLoaded'] = true;if (typeof(_nRepData['windowOnload']) === 'function') _nRepData['windowOnload']();};if (window.attachEvent)window.attachEvent('onload', windowLoadFunc);else if (window.addEventListener)window.addEventListener('load', windowLoadFunc, false);var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.defer = true;sc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'my.nanorep.com/widget/scripts/float.js';var _head = document.getElementsByTagName('head')[0];_head.appendChild(sc);})();
				</script>
				<script type="text/javascript">

				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-30012186-1']);
				  _gaq.push(['_setDomainName', 'pfd-nz.com']);
				  _gaq.push(['_trackPageview']);

				  (function() {
				    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();

				</script>
				
	        </footer>
		
		</div>
	</body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?=slink::path('js/vendor/fotorama.js');?>"></script>
        @yield('scripts')
        <script src="<?=slink::path('js/plugins.js');?>"></script>
        <script src="<?=slink::path('js/main.js');?>"></script>