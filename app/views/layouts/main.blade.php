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
		<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="/css/fonts.css">
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet/less" type="text/css" href="/less/main.less">
        <link href="/css/fotorama.css" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,300,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="/js/vendor/less-1.5.0.min.js"></script>
    <body class="main">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <article class="@yield('wrapper')">
        	<header>
        		<div class="header-social">
		        	<span><?=trans('menu.followus')?></span>
		        	<a href="https://www.facebook.com/pfdnz/info" class="social-button facebook" target="_blank"></a><a href="http://www.linkedin.com/company/pacific-financial-derivatives-ltd" class="social-button linked" target="_blank"></a><a href="http://twitter.com/#!/pfdnz" class="social-button twitter" target="_blank"></a><a href="http://kiwi.pfd-nz.com/press-room/index.php/feed/" class="social-button rss" target="_blank"></a>
		        </div>
        		<div class="header-top clearfix">
        			<a href="/" class="logo-div"></a>
        			<div class="lang-div">
        				<div class="search">
	        				<div class="search-img">
	        					<div class="search-main"></div>
	        					<div class="search-line"></div>
	        				</div>
	        				<div class="lang-ul">
	        					<div class="lang-triangle"></div>
	        					<?php if(is_null(Session::get('lang')) || Session::get('lang') == 'en') { ?>
		        					<div class="active-lang" data-lang="en" href="<?=sLang::link('en')?>">English</div>
		        					<div class="option-lang">
		        						<a style="color: #000;" class="lang-item" data-lang="vie" href="<?=sLang::link('vn')?>">Tiếng Việt</a><br>
		        						<a style="color: #000;" class="lang-item" data-lang="ch" href="<?=sLang::link('ch')?>">中國的</a><br>
		        					</div>
	        					<?php } elseif(Session::get('lang') == 'vn') { ?>
		        					<div class="active-lang" data-lang="vie" href="<?=sLang::link('vn')?>">Tiếng Việt</div>
		        					<div class="option-lang">
		        						<a style="color: #000;" class="lang-item" data-lang="en" href="<?=sLang::link('en')?>">English</a><br>
		        						<a style="color: #000;" class="lang-item" data-lang="ch" href="<?=sLang::link('ch')?>">中國的</a><br>
		        					</div>
	        					<?php } elseif(Session::get('lang') == 'ch') { ?>
	        						<div class="active-lang" data-lang="ch" href="<?=sLang::link('ch')?>">中國的</div>
		        					<div class="option-lang">
		        						<a style="color: #000;" class="lang-item" data-lang="en" href="<?=sLang::link('en')?>">English</a><br>
		        						<a style="color: #000;" class="lang-item" data-lang="vn" href="<?=sLang::link('vn')?>">Tiếng Việt</a><br>
		        					</div>
		        				<?php } ?>
	        				</div>
	        			</div>
	        			<div class="search-open">
	        				<input class="search-input" type="text" placeholder="search">
	        			</div>
        				<div class="sign">
        					<a href="#" class="sign-up js-open-sign"><?=trans('menu.sign_up')?></a>
        				</div>
        			</div>
        		</div>
	        	<div class="header-nav">
	        		<nav>
	        			<ul>
	        				<li><a href="#"><?=trans('menu.about_us')?></a>
	        					<ul class="header-sub-menu">
	        						<li><a href="/about"><?=trans('menu.comp_profile')?></a>
	        						<li><a href="/white"><?=trans('menu.white')?></a>
	        						<li><a href="/press"><?=trans('menu.press')?></a>
	        					</ul>
	        				<li><a href="#"><?=trans('menu.platforms')?></a>
	        					<ul class="header-sub-menu">
	        						<li><a href="/product"><?=trans('menu.pfd_trader')?></a>
	        						<li><a href="/product-kiwi">Kiwi trader</a>
	        						<li><a href="/product-multi"><?=trans('menu.mt4')?></a>
	        					</ul>
	        				<li><a href="#"><?=trans('menu.products')?></a>
	        					<ul class="header-sub-menu">
	        						<li><a href="/forex"><?=trans('menu.forex')?></a>
	        						<li><a href="/cfd"><?=trans('menu.cfd')?></a>
	        						<li><a href="/future"><?=trans('menu.futures')?></a>
	        					</ul>
	        				<li><a href="#"><?=trans('menu.operations')?></a>
	        					<ul class="header-sub-menu">
	        					    <li><a href="/deposit"><?=trans('menu.deposit')?></a>
	        					    <li><a href="/withdrawal"><?=trans('menu.withdrawals')?></a>
	        					    <li><a href="/contacts"><?=trans('menu.contacts')?></a>
	        					    <li><a href="/support"><?=trans('menu.support')?></a>
	        					    <li><a href="/chat"><?=trans('menu.chat')?></a>
	        					</ul>
	        				<li><a href="/broker"><?=trans('menu.broker')?></a>
	        				<li><a href="/spread"><?=trans('menu.spread')?></a>
	        				<li><a href="/accreditation"><?=trans('menu.accreditation')?></a>
	        					<ul class="header-sub-menu">
	        						<li><a href="/funds"><?=trans('menu.funds')?></a>
	        					</ul>
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
	        			<a href="/reg#demo" class="traider-link">
	        				<span class="f_header"><?=trans('menu.demo_acc')?></span>
	        				<span class="desc"><?=trans('menu.demo_desc')?></span>
	        			</a>
	        		<li>
	        			<!--<a href="reg#online" class="traider-link">-->
	        				<a href="https://kiwi.pfd-nz.com/signup/logon" class="traider-link">
	        				<span class="f_header"><?=trans('menu.online_acc')?></span>
	        				<span class="desc"><?=trans('menu.online_desc')?></span>
	        			</a>
	        		<li>
	        			<a href="/reg#paper" class="traider-link">
	        				<span class="f_header"><?=trans('menu.papper_acc')?></span>
	        				<span class="desc"><?=trans('menu.papper_desc')?></span>
	        			</a>
	        	</ul>
	        </div>

        @yield('content')
		
			<footer class="main-footer">
	        	<div class="footer-content cleafix">
	        		<div class="ftr-top clearfix">
		        		<ul class="ftr-links-list">
		        			<li class="ftr-links-item"><a href="/"><?=trans('menu.ft_home')?></a>
		        			<li class="ftr-links-item"><a href="/white"><?=trans('menu.white')?></a>
		        			<li class="ftr-links-item"><a href="/broker"><?=trans('menu.broker')?></a>
		        			<li class="ftr-links-item"><a href="/spread"><?=trans('menu.spread')?></a>
		        			<li class="ftr-links-item"><a href="/product"><?=trans('menu.meta_trader4')?></a>
		        			<li class="ftr-links-item"><a href="skype:<?=trans('menu.skype')?>?chat"><?=trans('menu.skype_chat')?></a>
		        			<li class="ftr-links-item"><a href="/sitemap"><?=trans('menu.site_map')?></a>
		        		</ul>
		        		<ul class="ftr-links-list about-us">
		        			<li class="ftr-links-item list-head"><?=trans('menu.about_us')?></a>
		        			<li class="ftr-links-item"><a href="/about"><?=trans('menu.welcome')?></a>
		        			<li class="ftr-links-item"><a href="/product-multi"><?=trans('menu.mt4')?></a>
		        			<li class="ftr-links-item"><a href="/legal"><?=trans('menu.legal')?></a>
		        			<li class="ftr-links-item"><a href="/press"><?=trans('menu.press')?></a>
		        			<li class="ftr-links-item"><a href="/contacts"><?=trans('menu.contacts')?></a>
		        		</ul>
		        		<ul class="ftr-links-list products">
		        			<li class="ftr-links-item list-head"><?=trans('menu.products')?>
		        			<li class="ftr-links-item"><a href="/forex"><?=trans('menu.forex')?></a>
    						<li class="ftr-links-item"><a href="/cfd"><?=trans('menu.cfd')?></a>
    						<li class="ftr-links-item"><a href="/future"><?=trans('menu.futures')?></a>
		        		</ul>
		        		<ul class="ftr-links-list operations">
		        			<li class="ftr-links-item list-head"><?=trans('menu.operations')?>
		        			<li class="ftr-links-item"><a href="/reg"><?=trans('menu.open_account')?></a>
		        			<li class="ftr-links-item"><a href="/deposit"><?=trans('menu.deposit')?></a>
		        			<li class="ftr-links-item"><a href="/withdrawal"><?=trans('menu.withdrawals')?></a>
		        			<li class="ftr-links-item"><a href="/support"><?=trans('menu.support')?></a>
		        			<!--<li class="ftr-links-item"><a href="chat">Phone trading</a>-->
		        		</ul>
	        		</div>
	        		<div class="ftr-copyright">
	        			<span class="ftr-l-c">&copy; 2014 Pacific Financial Derivatives Ltd. All Rights Reserved.</span>
	        			<span class="ftr-r-c">Made with love by <a href="http://grphm.com" target="_blank">GRPHM</a></span>
	        		</div>
	        		<a href="./" class="ftr-logo"></a>
	        	</div>
				
	        </footer>
		
		</div>
	</body>

		<!--GOOGLE-->
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

		<!-- AdRoll Smart Pixel -->
		<script type="text/javascript">
		adroll_adv_id = "JRTN6BXMPVGFJLJ2CBL37T";
		adroll_pix_id = "6EPWSQAEURDR5JJTUCCC2V";
		(function () {
		var oldonload = window.onload;
		window.onload = function(){
		   __adroll_loaded=true;
		   var scr = document.createElement("script");
		   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
		   scr.setAttribute('async', 'true');
		   scr.type = "text/javascript";
		   scr.src = host + "/j/roundtrip.js";
		   ((document.getElementsByTagName('head') || [null])[0] ||
		    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
		   if(oldonload){oldonload()}};
		}());
		</script>

		<!-- clustrmaps starts -->
		<div id="clustrmaps-widget" class="left_buttons" style="margin-left: 17px; margin-top: 10px; margin-bottom: 7px; display: none;"></div>
		<script type="text/javascript">var _clustrmaps = {'url' : 'http://www.pfd-nz.com', 'user' : 898678, 'server' : '4', 'id' : 'clustrmaps-widget', 'version' : 1, 'date' : '2011-06-10', 'lang' : 'en' };(function (){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//www4.clustrmaps.com/counter/map.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script>
		<noscript><a href="http://www4.clustrmaps.com/user/4b3db676"><img src="http://www4.clustrmaps.com/stats/maps-no_clusters/www.pfd-nz.com-thumb.jpg" alt="Locations of visitors to this page" /></a></noscript>
		<!-- clustrmaps ends -->
		  
		<!-- statcounter starts -->  
		<script type="text/javascript">
		    var sc_project=7221510; 
		    var sc_invisible=1; 
		    var sc_security="6949071d"; 
		    </script>

		    <script type="text/javascript"
		    src="//www.statcounter.com/counter/counter.js"></script><noscript><div
		    class="statcounter"><a title="free hit counter"
		    href="//statcounter.com/free_hit_counter.html"
		    target="_blank"><img class="statcounter"
		    src="//c.statcounter.com/7221510/0/6949071d/1/"
		    alt="free hit counter" ></a></div></noscript>
		<!-- statcounter ends -->

		<!-- do not modify this script -->
		<div class='nanorep_loadingData' id='nanoRepProxyContainer' style='position:absolute;top:-500px;left:0px;'></div>
		<script type='text/javascript'>var _nRepData = _nRepData || []; _nRepData['kb'] = '23452028'; _nRepData['float'] = {account: 'pfdnz', cdcVersion: 3, cdcFrame: '', scriptVersion: '2.22.2.31'}
		/* API here */;
		(function(){var windowLoadFunc = function(){var _nRepData = window._nRepData || [];_nRepData['windowLoaded'] = true;if (typeof(_nRepData['windowOnload']) === 'function') _nRepData['windowOnload']();};if (window.attachEvent)window.attachEvent('onload', windowLoadFunc);else if (window.addEventListener)window.addEventListener('load', windowLoadFunc, false);var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.defer = true;sc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'my.nanorep.com/widget/scripts/float.js';var _head = document.getElementsByTagName('head')[0];_head.appendChild(sc);})();
		</script>

		<?=trans('menu.ve_chat')?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/js/vendor/fotorama.js"></script>
        @yield('scripts')
        <script src="/js/plugins.js"></script>
        <script src="/js/main.js"></script>
