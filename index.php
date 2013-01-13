<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>How to Buy Bitcoins</title>
	<meta name="description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods.">
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.png" />
	<link rel="apple-touch-icon" href="/touchicon.png"/>
	
	<meta property="og:title" content="How to Buy Bitcoins" />
	<meta property="og:description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods." />
	<meta property="og:image" content="http://<?=$_SERVER["SERVER_NAME"]?>/logo256.png" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<style>
body{
	background: black url('/img/bg/main.jpg') no-repeat;
	background-size: 100%;
	color:white;
	font-family: sans-serif;
}

.leftheader{
	float:left;
}

.rightheader{
	float:right;
	text-align: right;
}
.rightheader a{
	color:white;
}
.rightheader a:visited{
	color:white;
}
.rightheader a:active{
	color:white;
}

.rightfooter{
	float:right;
	text-align: right;
}

h1{
	text-align: center;
	padding:1em;
}
h2{
	text-align: center;
	padding:1em;
}

.flagButtons{
	display:block;
	text-align: center;
}
.flagButton {
	display:inline-block;
	width:200px;
	text-align: center;
}
.flagButton:hover {
	color:black;
	background-color:rgba(255,255,255,0.8);
	border-radius:10px;
}
.flagButton img{
	width:128px;
	height:128px;
}

.infoBoxes{
	display:block;
	text-align: center;
	padding:1em;
}
.infoBox{
	width:80%;
	display:inline-block;
	text-align: left;
	color:black;
	background-color:rgba(255,255,255,0.8);
	border-radius:10px;
	padding:10px;
}

#countryNameBox{
	padding:5px 0 10px 0;
}
.serviceBox{
	padding:5px 0 5px 0;
}

</style>

</head>
<body>
<div id="fb-root"></div>
<script>
	window.fbAsyncInit = function() {
		// init the FB JS SDK
		FB.init({
			appId      : '268112269983311', // App ID from the App Dashboard
			channelUrl : '//<?=$_SERVER["SERVER_NAME"]?>/channel.html', // Channel File for x-domain communication
			status     : true, // check the login status upon init?
			cookie     : true, // set sessions cookies to allow your server to access the session?
			xfbml      : true  // parse XFBML tags on this page?
		});

		fbApiInit = true; //init flag
	};

	// Load the SDK's source Asynchronously
	// Note that the debug version is being actively developed and might 
	// contain some type checks that are overly strict. 
	// Please report such bugs using the bugs tool.
	(function(d, debug){
		var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
		ref.parentNode.insertBefore(js, ref);
	}(document, /*debug*/ false));

	function fbEnsureInit(callback) {
		if(!window.fbApiInit) {
			setTimeout(function() {fbEnsureInit(callback);}, 50);
		} else {
			if(callback) {
				callback();
			}
		}
	}
</script>

<div class="addthis_toolbox addthis_default_style leftheader">
	<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
	<a class="addthis_button_tweet"></a>
</div>
<div class="rightheader">
	<a href="//plus.google.com/112885603889814071692?prsrc=3" rel="publisher" style="text-decoration:none;">
		<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;vertical-align: top;"/>
	</a> <a href="http://www.jonwaller.net/">Me</a> | <a href="mailto:info@howtobuybitcoins.info">Comments / Updates?</a>
</div>	
<br style="clear:both"/>

<h1>How to Buy Bitcoins</h1>

<div class="flagButtons">
	<h2>I live in:</h2>
	<?makeFlagButton('us','United States');?>
	<?makeFlagButton('uk','United Kingdom');?>
	<?makeFlagButton('jp','Japan / 日本');?>
	<?makeOtherButton('Somewhere else');?>
	<br style="clear:both" />
</div>

<div class="infoBoxes">

	<div class="infoBox">
		<h2 id="countryNameBox"></h2>

		<div class="serviceBox us">
			<p><b>Note: If you're unsure, the author recommends <a href="https://bitinstant.com/">BitInstant</a> for purchases, and <a href="https://blockchain.info/">Blockchain.info</a> for storing your bitcoins.</b></p>
		</div>

		<div class="serviceBox uk">
			<p><b>Note: If you're unsure, the author recommends <a href="https://mtgox.com/">Mt. Gox</a> for purchases.</b></p>
		</div>

		<div class="serviceBox jp">
			<p><b>Note: If you're unsure, the author recommends <a href="https://mtgox.com/">Mt. Gox</a> for purchases.</b></p>
			<p><b>不安の場合:　購入のため、当サイトのお勧めは渋谷にある<a href="https://mtgox.com/">Mt. Gox</a>です。</b></p>
		</div>

		<div class="serviceBox af ax al dz as ad ao ai aq ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw bv br io bn bg bf bi kh cm ca cv ky cf td cl cn cx cc co km cg cd ck cr ci hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo fj fi fr gf pf tf ga gm ge de gh gi gr gl gd gp gu gt gg gn gw gy ht hm va hn hk hu is in id ir iq ie im il it jm jp je jo kz ke ki kp kr kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mq mr mu yt mx fm md mc mn me ms ma mz mm na nr np nl an nc nz ni ne ng nu nf mp no om pk pw ps pa pg py pe ph pn pl pt pr qa re ro ru rw sh kn lc pm vc ws sm st sa sn rs sc sl sg sk si sb so za gs es lk sd sr sj sz se ch sy tw tj tz th tl tg tk to tt tn tr tm tc tv ug ua ae uk us um uy uz vu ve vn vg vi wf eh ye zm zw">
			<img src="https://mtgox.com/favicon.ico" width="16"> 
			<a href="https://mtgox.com/">Mt. Gox</a> 
			<p>Well known bitcoin exchange. Sign up for an account, verify yourself and you can purchase a large number of bitcoins.</p>
		</div>

		<div class="serviceBox bs ky kz pr ru tc ua us vg vi">
			<img src="https://bitinstant.com/favicon.ico"> 
			<a href="https://bitinstant.com/">BitInstant.com</a>
			<p>Fast purchase of bitcoins through various methods including Moneygram, Dwolla, or a cash deposit at Walmart. Well known site.</p>
		</div>

		<div class="serviceBox it">
			<img src="/img/favicons/none.png"> 
			<a href="http://www.posteb.it/">PosteB.it</a>
			<p>Acquista Bitcoin con Postepay! Il sistema più veloce, economico, sicuro e anonimo per acquistare Bitcoin con Euro in Italia. Tutto automatico.</p>
		</div>

		<div class="serviceBox uk">
			<img src="https://blockchain.info/favicon.ico"> 
			<a href="https://blockchain.info/wallet/deposit-bank-transfer">Bank transfer (Blockchain.info)</a>
			<p>Pay from any major UK bank account. Transfers bitcoin to your <a href="https://blockchain.info/">Blockchain.info</a> wallet in under 2 hours.</p>
		</div>

		<div class="serviceBox ar au at be ba bg ca cl hr cz dk ee fi fr de gr hk id ie il it lv lt lu mx nl nz no pl pt ro ru sk za es se ch tw tr ua uk us">
			<img src="https://blockchain.info/favicon.ico"> 
			<a href="https://blockchain.info/wallet/sms-phone-deposits">SMS Phone Deposits (Blockchain.info)</a>
			<p>Works with every mobile phone or landline. No registration required. No credit card required. Can only be used three times a month, but has no maximum purchase limit.</p>
		</div>

		<div class="serviceBox uk">
			<img src="https://blockchain.info/favicon.ico"> 
			<a href="https://blockchain.info/wallet/deposit-pingit">'Barclays Pingit' iPhone App (Blockchain.info)</a>
			<p>Pay from any UK bank account. You can pay from a non-Barclays account, but transfer will be slower.</p>
		</div>

		<div class="serviceBox uk">
			<img src="/img/favicons/none.png"> 
			<a href="https://bitbargain.co.uk/">BitBargain.co.uk</a>
			<p>Pay from any major UK bank account. Pay with bank transfer or the Pingit app.</p>
		</div>

		<div class="serviceBox us">
			<img src="https://coinbase.com/favicon.ico"> 
			<a href="https://coinbase.com/">Coinbase.com</a>
			<p>A PayPal-style Internet wallet. Connect a US bank account to buy bitcoins.</p>
		</div>

		<div class="serviceBox cl us uk au ca fr de in it mx ph ru es at be dk ee fi gr ie lu nl nz no pl pt se ch">
			<img src="http://portal.bitcoinschile.cl/wp-content/uploads/2012/10/favicon2.ico" /> 
			<a href="http://portal.bitcoinschile.cl/">BitcoinsChile.cl</a>
			<p>Buy bitcoins by bank transfer (Chile only), or by Western Digital or Moneygram (US, some of Europe, India, others.).</p>
		</div>

		<div class="serviceBox es">
			<img src="http://www.bitcoin.com.es/images/favicon.png" width="16" /> 
			<a href="http://www.bitcoin.com.es/">Bitcoin.com.es</a>
			<p>Compra y vende Bitcoins con comodidad a traves de transferencia bancaria.</p>
		</div>

		<div class="serviceBox au">
			<img src="https://www.spendbitcoins.com/media/css/images/favicon.ico"> 
			<a href="https://www.spendbitcoins.com/">SpendBitcoins.com</a>
			<p>Buy bitcoin in Australia by bank transfer.</p>
		</div>

		<div class="serviceBox au nz">
			<img src="https://bitinnovate.com/favicon.ico" width="16"> 
			<a href="https://bitinnovate.com/">BitInnovate.com</a>
			<p>Buy bitcoin in New Zealand and Australia with a bank transfer.</p>
		</div>

<?/*
		Perhaps suspicious. Hiding for now.

		<!-- Affiliate-style -->		

		<div class="serviceBox ar bo br cl co cr cu do ec es sv ht hn mx pa py pe pr uy">
			<img src="/img/favicons/none.png" width="16"> 
			<a href="http://www.btctree.net/">BTCTree.net</a>
			<p>Affiliate marketing site, but you can fund your account and withdraw bitcoins without using the affiliate part of the site. Accepts bank transfer, Liberty Reserve, Pecunix, Ukash, Paysafecard, Western Union, Moneygram, Neteller, and CashU.</p>
		</div>
*/?>

		<!-- Markets -->

		<div class="serviceBox uk us ru es de fr it cn th vn ms et hu pl fa ar">
			<img src="https://www.okpay.com/favicon.ico"> 
			<a href="https://www.okpay.com/en/company/news/bitcoin-okpay.html">OKPay.com</a>
			<p>Large electronic currency trading and exchange site.</p>
		</div> 

		<div class="serviceBox be bg cz dk de ee ie el es fr it cy lv lt lu hu mt nl at pl pt ro si sk fi se uk">
			<img src="/img/favicons/none.png"> 
			<a href="https://therocktrading.com/">TheRockTrading.com</a>
			<p>Trade e-currencies (such as Bitcoin and Lindens) from anywhere in Europe. (Supports SEPA bank transfers)</p>
		</div>

		<div class="serviceBox uk us ru nl fi pl cz it si">
			<img src="https://www.bitstamp.net/s/favicon.ico"> 
			<a href="https://www.bitstamp.net/">BitStamp.net</a>
			<p>Buy and sell bitcoins with other users through an online marketplace.</p>
		</div>

		<div class="serviceBox uk ru">
			<img src="https://btc-e.com/favicon.ico"> 
			<a href="https://btc-e.com/">BTC-e.com</a>
			<p>Market for buying and selling bitcoin for the UK and Russia.</p>
		</div>

		<div class="serviceBox be bg cz dk de ee ie el es fr it cy lv lt lu hu mt nl at pl pt ro si sk fi se uk">
			<img src="https://bitmarket.eu/favicon.ico" width="16"> 
			<a href="https://bitmarket.eu/">BitMarket.eu</a>
			<p>Market for buying and selling bitcoin. Accepts SEPA bank transfers from anywhere in Europe.</p>
		</div>

		<div class="serviceBox be bg cz dk de ee ie el es fr it cy lv lt lu hu mt nl at pl pt ro si sk fi se uk">
			<img src="https://www.bitcoin.de/favicon.ico"> 
			<a href="https://www.bitcoin.de/">Bitcoin.de</a>
			<p>Market for buying and selling bitcoin. Accepts SEPA bank transfers from anywhere in Europe.</p>
		</div>

		<div class="serviceBox be bg cz dk de ee ie el es fr it cy lv lt lu hu mt nl at pl pt ro si sk fi se uk">
			<img src="https://intersango.com/templates/clean/img/favicon.png"> 
			<a href="https://intersango.com/">Intersango.com</a>
			<p>Market for buying and selling bitcoin. Accepts SEPA bank transfers from anywhere in Europe.</p>
		</div>

		<div class="serviceBox il">
			<img src="https://bitcoil.co.il/favicon.ico" width="16" /> 
			<a href="https://bitcoil.co.il/">bitcoil.co.il</a>
			<p>Here you can buy and sell bitcoins for Israeli New Shekels.</p>
		</div>

		<div class="serviceBox br">
			<img src="http://www.mercadobitcoin.com.br/static/ico/favicon.ico" width="16" /> 
			<a href="http://www.MercadoBitcoin.com.br/">MercadoBitcoin.com.br</a>
			<p>Buy and sell bitcoins in Brazil.</p>
		</div>

		<div class="serviceBox br">
			<img src="http://bbbitcoins.com.br/imagem/cache/data/icon-20x20.png" width="16" /> 
			<a href="http://bbbitcoins.com.br/">bbbitcoins.com.br</a>
			<p>Buy and sell bitcoins in Brazil.</p>
		</div>


		<!-- OTC -->

		<div class="serviceBox af ax al dz as ad ao ai aq ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw bv br io bn bg bf bi kh cm ca cv ky cf td cl cn cx cc co km cg cd ck cr ci hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo fj fi fr gf pf tf ga gm ge de gh gi gr gl gd gp gu gt gg gn gw gy ht hm va hn hk hu is in id ir iq ie im il it jm jp je jo kz ke ki kp kr kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mq mr mu yt mx fm md mc mn me ms ma mz mm na nr np nl an nc nz ni ne ng nu nf mp no om pk pw ps pa pg py pe ph pn pl pt pr qa re ro ru rw sh kn lc pm vc ws sm st sa sn rs sc sl sg sk si sb so za gs es lk sd sr sj sz se ch sy tw tj tz th tl tg tk to tt tn tr tm tc tv ug ua ae uk us um uy uz vu ve vn vg vi wf eh ye zm zw">
			<img src="/img/favicons/localbitcoins.png"> 
			<a href="https://localbitcoins.com/">LocalBitcoins.com</a>
			<p>In-person trading. Find someone in your local area who trades bitcoins for cash, and arrange to meet them in person. Run by <a href="https://localbitcoins.com/">LocalBitcoins.com</a>.</p>
		</div>

		<div class="serviceBox af ax al dz as ad ao ai aq ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw bv br io bn bg bf bi kh cm ca cv ky cf td cl cn cx cc co km cg cd ck cr ci hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo fj fi fr gf pf tf ga gm ge de gh gi gr gl gd gp gu gt gg gn gw gy ht hm va hn hk hu is in id ir iq ie im il it jm jp je jo kz ke ki kp kr kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mq mr mu yt mx fm md mc mn me ms ma mz mm na nr np nl an nc nz ni ne ng nu nf mp no om pk pw ps pa pg py pe ph pn pl pt pr qa re ro ru rw sh kn lc pm vc ws sm st sa sn rs sc sl sg sk si sb so za gs es lk sd sr sj sz se ch sy tw tj tz th tl tg tk to tt tn tr tm tc tv ug ua ae uk us um uy uz vu ve vn vg vi wf eh ye zm zw">
			<img src="https://en.bitcoin.it/favicon.ico"> 
			<a href="https://en.bitcoin.it/wiki/Bitcoin_OTC">Bitcoin Wiki's OTC</a>
			<p>Over-the-counter exchange. Find a direct seller online to buy and sell bitcoin with.</p>
		</div>

		<div class="serviceBox af ax al dz as ad ao ai aq ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw bv br io bn bg bf bi kh cm ca cv ky cf td cl cn cx cc co km cg cd ck cr ci hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo fj fi fr gf pf tf ga gm ge de gh gi gr gl gd gp gu gt gg gn gw gy ht hm va hn hk hu is in id ir iq ie im il it jm jp je jo kz ke ki kp kr kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mq mr mu yt mx fm md mc mn me ms ma mz mm na nr np nl an nc nz ni ne ng nu nf mp no om pk pw ps pa pg py pe ph pn pl pt pr qa re ro ru rw sh kn lc pm vc ws sm st sa sn rs sc sl sg sk si sb so za gs es lk sd sr sj sz se ch sy tw tj tz th tl tg tk to tt tn tr tm tc tv ug ua ae uk us um uy uz vu ve vn vg vi wf eh ye zm zw">
			<img src="/img/favicons/none.png"> 
			<a href="https://www.bitcoinary.com/">Bitcoinary.com's OTC</a>
			<p>Over-the-counter exchange. Find a direct seller online to buy and sell bitcoin with.</p>
		</div>

		<div class="serviceBox af ax al dz as ad ao ai aq ag ar am aw au at az bs bh bd bb by be bz bj bm bt bo ba bw bv br io bn bg bf bi kh cm ca cv ky cf td cl cn cx cc co km cg cd ck cr ci hr cu cy cz dk dj dm do ec eg sv gq er ee et fk fo fj fi fr gf pf tf ga gm ge de gh gi gr gl gd gp gu gt gg gn gw gy ht hm va hn hk hu is in id ir iq ie im il it jm jp je jo kz ke ki kp kr kw kg la lv lb ls lr ly li lt lu mo mk mg mw my mv ml mt mh mq mr mu yt mx fm md mc mn me ms ma mz mm na nr np nl an nc nz ni ne ng nu nf mp no om pk pw ps pa pg py pe ph pn pl pt pr qa re ro ru rw sh kn lc pm vc ws sm st sa sn rs sc sl sg sk si sb so za gs es lk sd sr sj sz se ch sy tw tj tz th tl tg tk to tt tn tr tm tc tv ug ua ae uk us um uy uz vu ve vn vg vi wf eh ye zm zw">
			<img src="https://bitcointalk.org/favicon.ico"> 
			<a href="https://bitcointalk.org/index.php?board=53.0">BitcoinTalk Forum's OTC</a> 
			<p>Over-the-counter exchange. Find a direct seller online to buy and sell bitcoin with.</p>
		</div>

		<hr />
		<div id="facebookCommentsBox"></div>

		<!-- AddThis Button BEGIN -->
		<hr />
		<div class="addthis_toolbox addthis_default_style" style="float:left">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone_share"></a>
			<a class="addthis_button_email"></a>
		</div>
		<div class="rightfooter">
			<a href="//plus.google.com/112885603889814071692?prsrc=3" rel="publisher" style="text-decoration:none;">
				<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;vertical-align: top;"/>
			</a> <a href="http://www.jonwaller.net/">Me</a> | <a href="mailto:info@howtobuybitcoins.info">Comments / Updates?</a>
		</div>	
		<!-- AddThis Button END -->

	</div>

</div>

<script>
	var flagsBecameSmall=false;

	function getCountryName(countryCode) {
		if(countryCode=="gw") { return "Guinea-Bissau"; }
		if(countryCode=="gu") { return "Guam"; }
		if(countryCode=="gt") { return "Guatemala"; }
		if(countryCode=="gs") { return "South Georgia and the South Sandwich Islands"; }
		if(countryCode=="gr") { return "Greece"; }
		if(countryCode=="gq") { return "Equatorial Guinea"; }
		if(countryCode=="gp") { return "Guadeloupe"; }
		if(countryCode=="gy") { return "Guyana"; }
		if(countryCode=="gg") { return "Guernsey"; }
		if(countryCode=="gf") { return "French Guiana"; }
		if(countryCode=="ge") { return "Georgia"; }
		if(countryCode=="gd") { return "Grenada"; }
		if(countryCode=="gb") { return "United Kingdom"; } //Not using this
		if(countryCode=="uk") { return "United Kingdom"; }
		if(countryCode=="ga") { return "Gabon"; }
		if(countryCode=="gn") { return "Guinea"; }
		if(countryCode=="gm") { return "Gambia"; }
		if(countryCode=="gl") { return "Greenland"; }
		if(countryCode=="gi") { return "Gibraltar"; }
		if(countryCode=="gh") { return "Ghana"; }
		if(countryCode=="lb") { return "Lebanon"; }
		if(countryCode=="lc") { return "Saint Lucia"; }
		if(countryCode=="la") { return "Lao People&#39;s Democratic Republic"; }
		if(countryCode=="tv") { return "Tuvalu"; }
		if(countryCode=="tw") { return "Taiwan, Province of China"; }
		if(countryCode=="tt") { return "Trinidad and Tobago"; }
		if(countryCode=="tr") { return "Turkey"; }
		if(countryCode=="lk") { return "Sri Lanka"; }
		if(countryCode=="li") { return "Liechtenstein"; }
		if(countryCode=="lv") { return "Latvia"; }
		if(countryCode=="to") { return "Tonga"; }
		if(countryCode=="tl") { return "Timor-Leste"; }
		if(countryCode=="tm") { return "Turkmenistan"; }
		if(countryCode=="lr") { return "Liberia"; }
		if(countryCode=="ls") { return "Lesotho"; }
		if(countryCode=="th") { return "Thailand"; }
		if(countryCode=="tf") { return "French Southern Territories"; }
		if(countryCode=="tg") { return "Togo"; }
		if(countryCode=="td") { return "Chad"; }
		if(countryCode=="tc") { return "Turks and Caicos Islands"; }
		if(countryCode=="ly") { return "Libyan Arab Jamahiriya"; }
		if(countryCode=="do") { return "Dominican Republic"; }
		if(countryCode=="dm") { return "Dominica"; }
		if(countryCode=="dj") { return "Djibouti"; }
		if(countryCode=="dk") { return "Denmark"; }
		if(countryCode=="de") { return "Germany"; }
		if(countryCode=="ye") { return "Yemen"; }
		if(countryCode=="jp") { return "Japan"; }
		if(countryCode=="uy") { return "Uruguay"; }
		if(countryCode=="yt") { return "Mayotte"; }
		if(countryCode=="kn") { return "Saint Kitts and Nevis"; }
		if(countryCode=="qa") { return "Qatar"; }
		if(countryCode=="zm") { return "Zambia"; }
		if(countryCode=="eh") { return "Western Sahara"; }
		if(countryCode=="be") { return "Belgium"; }
		if(countryCode=="ee") { return "Estonia"; }
		if(countryCode=="eg") { return "Egypt"; }
		if(countryCode=="za") { return "South Africa"; }
		if(countryCode=="ec") { return "Ecuador"; }
		if(countryCode=="sj") { return "Svalbard and Jan Mayen"; }
		if(countryCode=="sg") { return "Singapore"; }
		if(countryCode=="mk") { return "Macedonia, the former Yugoslav Republic of"; }
		if(countryCode=="et") { return "Ethiopia"; }
		if(countryCode=="zw") { return "Zimbabwe"; }
		if(countryCode=="es") { return "Spain"; }
		if(countryCode=="er") { return "Eritrea"; }
		if(countryCode=="ru") { return "Russian Federation"; }
		if(countryCode=="rw") { return "Rwanda"; }
		if(countryCode=="rs") { return "Serbia"; }
		if(countryCode=="na") { return "Namibia"; }
		if(countryCode=="re") { return "Reunion"; }
		if(countryCode=="ro") { return "Romania"; }
		if(countryCode=="tk") { return "Tokelau"; }
		if(countryCode=="tz") { return "Tanzania, United Republic of"; }
		if(countryCode=="bd") { return "Bangladesh"; }
		if(countryCode=="wf") { return "Wallis and Futuna"; }
		if(countryCode=="bf") { return "Burkina Faso"; }
		if(countryCode=="bg") { return "Bulgaria"; }
		if(countryCode=="vg") { return "Virgin Islands, British"; }
		if(countryCode=="ba") { return "Bosnia and Herzegovina"; }
		if(countryCode=="bb") { return "Barbados"; }
		if(countryCode=="bl") { return "Saint Barthelemy"; }
		if(countryCode=="bm") { return "Bermuda"; }
		if(countryCode=="bn") { return "Brunei Darussalam"; }
		if(countryCode=="bo") { return "Bolivia, Plurinational State of"; }
		if(countryCode=="bh") { return "Bahrain"; }
		if(countryCode=="bi") { return "Burundi"; }
		if(countryCode=="bj") { return "Benin"; }
		if(countryCode=="bt") { return "Bhutan"; }
		if(countryCode=="jm") { return "Jamaica"; }
		if(countryCode=="bv") { return "Bouvet Island"; }
		if(countryCode=="jo") { return "Jordan"; }
		if(countryCode=="ws") { return "Samoa"; }
		if(countryCode=="br") { return "Brazil"; }
		if(countryCode=="bs") { return "Bahamas"; }
		if(countryCode=="je") { return "Jersey"; }
		if(countryCode=="by") { return "Belarus"; }
		if(countryCode=="bz") { return "Belize"; }
		if(countryCode=="tn") { return "Tunisia"; }
		if(countryCode=="om") { return "Oman"; }
		if(countryCode=="ua") { return "Ukraine"; }
		if(countryCode=="bw") { return "Botswana"; }
		if(countryCode=="mz") { return "Mozambique"; }
		if(countryCode=="ck") { return "Cook Islands"; }
		if(countryCode=="ci") { return "Cote d&#39;Ivoire"; }
		if(countryCode=="ch") { return "Switzerland"; }
		if(countryCode=="co") { return "Colombia"; }
		if(countryCode=="cn") { return "China"; }
		if(countryCode=="cm") { return "Cameroon"; }
		if(countryCode=="cl") { return "Chile"; }
		if(countryCode=="cc") { return "Cocos (Keeling) Islands"; }
		if(countryCode=="ca") { return "Canada"; }
		if(countryCode=="cg") { return "Congo"; }
		if(countryCode=="cf") { return "Central African Republic"; }
		if(countryCode=="cd") { return "Congo, the Democratic Republic of the"; }
		if(countryCode=="cz") { return "Czech Republic"; }
		if(countryCode=="cy") { return "Cyprus"; }
		if(countryCode=="cx") { return "Christmas Island"; }
		if(countryCode=="cr") { return "Costa Rica"; }
		if(countryCode=="cv") { return "Cape Verde"; }
		if(countryCode=="cu") { return "Cuba"; }
		if(countryCode=="ad") { return "Andorra"; }
		if(countryCode=="pr") { return "Puerto Rico"; }
		if(countryCode=="ps") { return "Palestinian Territory, Occupied"; }
		if(countryCode=="pw") { return "Palau"; }
		if(countryCode=="pt") { return "Portugal"; }
		if(countryCode=="py") { return "Paraguay"; }
		if(countryCode=="lt") { return "Lithuania"; }
		if(countryCode=="mu") { return "Mauritius"; }
		if(countryCode=="iq") { return "Iraq"; }
		if(countryCode=="lu") { return "Luxembourg"; }
		if(countryCode=="pf") { return "French Polynesia"; }
		if(countryCode=="pg") { return "Papua New Guinea"; }
		if(countryCode=="pe") { return "Peru"; }
		if(countryCode=="pk") { return "Pakistan"; }
		if(countryCode=="ph") { return "Philippines"; }
		if(countryCode=="pn") { return "Pitcairn"; }
		if(countryCode=="pl") { return "Poland"; }
		if(countryCode=="pm") { return "Saint Pierre and Miquelon"; }
		if(countryCode=="hr") { return "Croatia"; }
		if(countryCode=="al") { return "Albania"; }
		if(countryCode=="ht") { return "Haiti"; }
		if(countryCode=="hu") { return "Hungary"; }
		if(countryCode=="hk") { return "Hong Kong"; }
		if(countryCode=="hn") { return "Honduras"; }
		if(countryCode=="vn") { return "Viet Nam"; }
		if(countryCode=="hm") { return "Heard Island and McDonald Islands"; }
		if(countryCode=="me") { return "Montenegro"; }
		if(countryCode=="md") { return "Moldova, Republic of"; }
		if(countryCode=="mg") { return "Madagascar"; }
		if(countryCode=="mf") { return "Saint Martin (French part)"; }
		if(countryCode=="ma") { return "Morocco"; }
		if(countryCode=="mc") { return "Monaco"; }
		if(countryCode=="uz") { return "Uzbekistan"; }
		if(countryCode=="mm") { return "Myanmar"; }
		if(countryCode=="ml") { return "Mali"; }
		if(countryCode=="mo") { return "Macao"; }
		if(countryCode=="mn") { return "Mongolia"; }
		if(countryCode=="mh") { return "Marshall Islands"; }
		if(countryCode=="us") { return "United States"; }
		if(countryCode=="um") { return "United States Minor Outlying Islands"; }
		if(countryCode=="mt") { return "Malta"; }
		if(countryCode=="mw") { return "Malawi"; }
		if(countryCode=="mv") { return "Maldives"; }
		if(countryCode=="mq") { return "Martinique"; }
		if(countryCode=="mp") { return "Northern Mariana Islands"; }
		if(countryCode=="ms") { return "Montserrat"; }
		if(countryCode=="mr") { return "Mauritania"; }
		if(countryCode=="im") { return "Isle of Man"; }
		if(countryCode=="ug") { return "Uganda"; }
		if(countryCode=="my") { return "Malaysia"; }
		if(countryCode=="mx") { return "Mexico"; }
		if(countryCode=="il") { return "Israel"; }
		if(countryCode=="va") { return "Holy See (Vatican City State)"; }
		if(countryCode=="vc") { return "Saint Vincent and the Grenadines"; }
		if(countryCode=="ae") { return "United Arab Emirates"; }
		if(countryCode=="ve") { return "Venezuela, Bolivarian Republic of"; }
		if(countryCode=="ag") { return "Antigua and Barbuda"; }
		if(countryCode=="af") { return "Afghanistan"; }
		if(countryCode=="ai") { return "Anguilla"; }
		if(countryCode=="vi") { return "Virgin Islands, U.S."; }
		if(countryCode=="is") { return "Iceland"; }
		if(countryCode=="ir") { return "Iran, Islamic Republic of"; }
		if(countryCode=="am") { return "Armenia"; }
		if(countryCode=="it") { return "Italy"; }
		if(countryCode=="ao") { return "Angola"; }
		if(countryCode=="an") { return "Netherlands Antilles"; }
		if(countryCode=="aq") { return "Antarctica"; }
		if(countryCode=="as") { return "American Samoa"; }
		if(countryCode=="ar") { return "Argentina"; }
		if(countryCode=="au") { return "Australia"; }
		if(countryCode=="vu") { return "Vanuatu"; }
		if(countryCode=="aw") { return "Aruba"; }
		if(countryCode=="in") { return "India"; }
		if(countryCode=="ax") { return "Aland Islands"; }
		if(countryCode=="az") { return "Azerbaijan"; }
		if(countryCode=="ie") { return "Ireland"; }
		if(countryCode=="id") { return "Indonesia"; }
		if(countryCode=="sa") { return "Saudi Arabia"; }
		if(countryCode=="nl") { return "Netherlands"; }
		if(countryCode=="no") { return "Norway"; }
		if(countryCode=="pa") { return "Panama"; }
		if(countryCode=="dz") { return "Algeria"; }
		if(countryCode=="nc") { return "New Caledonia"; }
		if(countryCode=="ne") { return "Niger"; }
		if(countryCode=="nf") { return "Norfolk Island"; }
		if(countryCode=="ng") { return "Nigeria"; }
		if(countryCode=="nz") { return "New Zealand"; }
		if(countryCode=="sh") { return "Saint Helena, Ascension and Tristan da Cunha"; }
		if(countryCode=="np") { return "Nepal"; }
		if(countryCode=="so") { return "Somalia"; }
		if(countryCode=="nr") { return "Nauru"; }
		if(countryCode=="nu") { return "Niue"; }
		if(countryCode=="fr") { return "France"; }
		if(countryCode=="io") { return "British Indian Ocean Territory"; }
		if(countryCode=="ni") { return "Nicaragua"; }
		if(countryCode=="kz") { return "Kazakhstan"; }
		if(countryCode=="fi") { return "Finland"; }
		if(countryCode=="fj") { return "Fiji"; }
		if(countryCode=="fk") { return "Falkland Islands (Malvinas)"; }
		if(countryCode=="fm") { return "Micronesia, Federated States of"; }
		if(countryCode=="fo") { return "Faroe Islands"; }
		if(countryCode=="tj") { return "Tajikistan"; }
		if(countryCode=="sz") { return "Swaziland"; }
		if(countryCode=="sy") { return "Syrian Arab Republic"; }
		if(countryCode=="kg") { return "Kyrgyzstan"; }
		if(countryCode=="ke") { return "Kenya"; }
		if(countryCode=="sr") { return "Suriname"; }
		if(countryCode=="ki") { return "Kiribati"; }
		if(countryCode=="kh") { return "Cambodia"; }
		if(countryCode=="sv") { return "El Salvador"; }
		if(countryCode=="km") { return "Comoros"; }
		if(countryCode=="st") { return "Sao Tome and Principe"; }
		if(countryCode=="sk") { return "Slovakia"; }
		if(countryCode=="kr") { return "Korea, Republic of"; }
		if(countryCode=="si") { return "Slovenia"; }
		if(countryCode=="kp") { return "Korea, Democratic People&#39;s Republic of"; }
		if(countryCode=="kw") { return "Kuwait"; }
		if(countryCode=="sn") { return "Senegal"; }
		if(countryCode=="sm") { return "San Marino"; }
		if(countryCode=="sl") { return "Sierra Leone"; }
		if(countryCode=="sc") { return "Seychelles"; }
		if(countryCode=="sb") { return "Solomon Islands"; }
		if(countryCode=="ky") { return "Cayman Islands"; }
		if(countryCode=="at") { return "Austria"; }
		if(countryCode=="se") { return "Sweden"; }
		if(countryCode=="sd") { return "Sudan"; }
		return undefined;
	}

	function showInfo(countryCode){
		var countryName = getCountryName(countryCode);
		
		$('#facebookCommentsBox').html('');
		if(countryName !== undefined){
			$('#countryNameBox').html(
				'<b><img src="/img/miniflags/'+countryCode+'.png"> '+
				'Buying Bitcoin in '+countryName+'</b>'
			);
			document.title = 'How to buy Bitcoin in '+countryName;

			fbEnsureInit(function() {
				var commentsBoxContainer=document.getElementById('facebookCommentsBox');
				while (commentsBoxContainer.hasChildNodes()) {
    				commentsBoxContainer.removeChild(commentsBoxContainer.lastChild);
				}
				
				var newCommentBoxHtml='<div class="fb-comments" data-href="http://<?=$_SERVER["SERVER_NAME"]?>/#'+countryCode+'" data-num-posts="20" data-width="500"></div>';;
				commentsBoxContainer.innerHTML=newCommentBoxHtml; 
				FB.XFBML.parse(commentsBoxContainer);
			});

		}else{
			$('#countryNameBox').html('');
			document.title = 'How to Buy Bitcoin';			
		}

		//Hide old stuff
		$('.serviceBox').hide();
		$('.infoBox').hide();

		//Show new stuff
		$('.'+countryCode).show(); //But still hidden by infoBox
		if (flagsBecameSmall){
			$('.infoBox').show('fast');
		}else{
			$('h1').slideUp('slow');
			$('.flagButtons h2').slideUp('slow');
			$('.flagButton img').animate({width:'50px',height:'50px'},'slow',function(){
				$('.infoBox').show('fast');
				flagsBecameSmall=true;
			});
		}
	}

	function goToCountryInHash(){
		if(window.location.hash) {
			//Puts hash in variable, and removes the # character
			var countryCode = window.location.hash.substring(1); 
			if (countryCode.length==2 && countryCode!=='xx'){
				showInfo(countryCode);	
			}
		}
	}

	$(document).ready(function(){
		
		$('.infoBox').hide();
		
		//If there is a country hash
		goToCountryInHash();

		$(window).bind('hashchange', function() {
			goToCountryInHash();
		});

		$(".flagButton").click(function(){ 
			var flagIdClicked = $(this)[0].id;
			var countryCode = flagIdClicked.replace('#','');
			if (countryCode!=='xx'){
				location.href='/#'+countryCode;
				//showInfo(countryCode);	
			}		 
		});

    	$("#countryDropdown").change(function () {
			$("select option:selected").each(function () {
				var countryCodeFromDropdown=$(this).val();
				if (countryCodeFromDropdown!=='xx'){
					location.href='/#'+countryCodeFromDropdown;
					//showInfo(countryCodeFromDropdown);	
				}
			});
		}).change();

	});
</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
		
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4294505-15']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>

<?
function makeFlagButton($countryCode,$humanReadableName){
	$flagImg = "<img src='/img/flags/$countryCode.png' alt='Flag for $humanReadableName' />";
	echo "<div id='#$countryCode' class='flagButton'>".
			"<p>$flagImg</p>".
			"<p>$humanReadableName</p>".
		"</div>\n";
}

function makeOtherButton($humanReadableName){
	echo "<div id='#xx' class='flagButton' style='width:300px'>".
			"<p>".
			"<select id='countryDropdown'>".
				"<option value='xx'>[Choose a country]</option>".
"<option value='af'>Afghanistan</option>
<option value='ax'>Åland Islands</option>
<option value='al'>Albania</option>
<option value='dz'>Algeria</option>
<option value='as'>American Samoa</option>
<option value='ad'>Andorra</option>
<option value='ao'>Angola</option>
<option value='ai'>Anguilla</option>
<option value='aq'>Antarctica</option>
<option value='ag'>Antigua and Barbuda</option>
<option value='ar'>Argentina</option>
<option value='am'>Armenia</option>
<option value='aw'>Aruba</option>
<option value='au'>Australia</option>
<option value='at'>Austria</option>
<option value='az'>Azerbaijan</option>
<option value='bs'>Bahamas</option>
<option value='bh'>Bahrain</option>
<option value='bd'>Bangladesh</option>
<option value='bb'>Barbados</option>
<option value='by'>Belarus</option>
<option value='be'>Belgium</option>
<option value='bz'>Belize</option>
<option value='bj'>Benin</option>
<option value='bm'>Bermuda</option>
<option value='bt'>Bhutan</option>
<option value='bo'>Bolivia</option>
<option value='ba'>Bosnia and Herzegovina</option>
<option value='bw'>Botswana</option>
<option value='bv'>Bouvet Island</option>
<option value='br'>Brazil</option>
<option value='io'>British Indian Ocean Territory</option>
<option value='bn'>Brunei Darussalam</option>
<option value='bg'>Bulgaria</option>
<option value='bf'>Burkina Faso</option>
<option value='bi'>Burundi</option>
<option value='kh'>Cambodia</option>
<option value='cm'>Cameroon</option>
<option value='ca'>Canada</option>
<option value='cv'>Cape Verde</option>
<option value='ky'>Cayman Islands</option>
<option value='cf'>Central African Republic</option>
<option value='td'>Chad</option>
<option value='cl'>Chile</option>
<option value='cn'>China</option>
<option value='cx'>Christmas Island</option>
<option value='cc'>Cocos (Keeling) Islands</option>
<option value='co'>Colombia</option>
<option value='km'>Comoros</option>
<option value='cg'>Congo</option>
<option value='cd'>Congo, The Democratic Republic of The</option>
<option value='ck'>Cook Islands</option>
<option value='cr'>Costa Rica</option>
<option value='ci'>Cote D'ivoire</option>
<option value='hr'>Croatia</option>
<option value='cu'>Cuba</option>
<option value='cy'>Cyprus</option>
<option value='cz'>Czech Republic</option>
<option value='dk'>Denmark</option>
<option value='dj'>Djibouti</option>
<option value='dm'>Dominica</option>
<option value='do'>Dominican Republic</option>
<option value='ec'>Ecuador</option>
<option value='eg'>Egypt</option>
<option value='sv'>El Salvador</option>
<option value='gq'>Equatorial Guinea</option>
<option value='er'>Eritrea</option>
<option value='ee'>Estonia</option>
<option value='et'>Ethiopia</option>
<option value='fk'>Falkland Islands (Malvinas)</option>
<option value='fo'>Faroe Islands</option>
<option value='fj'>Fiji</option>
<option value='fi'>Finland</option>
<option value='fr'>France</option>
<option value='gf'>French Guiana</option>
<option value='pf'>French Polynesia</option>
<option value='tf'>French Southern Territories</option>
<option value='ga'>Gabon</option>
<option value='gm'>Gambia</option>
<option value='ge'>Georgia</option>
<option value='de'>Germany</option>
<option value='gh'>Ghana</option>
<option value='gi'>Gibraltar</option>
<option value='gr'>Greece</option>
<option value='gl'>Greenland</option>
<option value='gd'>Grenada</option>
<option value='gp'>Guadeloupe</option>
<option value='gu'>Guam</option>
<option value='gt'>Guatemala</option>
<option value='gg'>Guernsey</option>
<option value='gn'>Guinea</option>
<option value='gw'>Guinea-bissau</option>
<option value='gy'>Guyana</option>
<option value='ht'>Haiti</option>
<option value='hm'>Heard Island and Mcdonald Islands</option>
<option value='va'>Holy See (Vatican City State)</option>
<option value='hn'>Honduras</option>
<option value='hk'>Hong Kong</option>
<option value='hu'>Hungary</option>
<option value='is'>Iceland</option>
<option value='in'>India</option>
<option value='id'>Indonesia</option>
<option value='ir'>Iran, Islamic Republic of</option>
<option value='iq'>Iraq</option>
<option value='ie'>Ireland</option>
<option value='im'>Isle of Man</option>
<option value='il'>Israel</option>
<option value='it'>Italy</option>
<option value='jm'>Jamaica</option>
<option value='jp'>Japan</option>
<option value='je'>Jersey</option>
<option value='jo'>Jordan</option>
<option value='kz'>Kazakhstan</option>
<option value='ke'>Kenya</option>
<option value='ki'>Kiribati</option>
<option value='kp'>Korea, Democratic People's Republic of</option>
<option value='kr'>Korea, Republic of</option>
<option value='kw'>Kuwait</option>
<option value='kg'>Kyrgyzstan</option>
<option value='la'>Lao People's Democratic Republic</option>
<option value='lv'>Latvia</option>
<option value='lb'>Lebanon</option>
<option value='ls'>Lesotho</option>
<option value='lr'>Liberia</option>
<option value='ly'>Libyan Arab Jamahiriya</option>
<option value='li'>Liechtenstein</option>
<option value='lt'>Lithuania</option>
<option value='lu'>Luxembourg</option>
<option value='mo'>Macao</option>
<option value='mk'>Macedonia, The Former Yugoslav Republic of</option>
<option value='mg'>Madagascar</option>
<option value='mw'>Malawi</option>
<option value='my'>Malaysia</option>
<option value='mv'>Maldives</option>
<option value='ml'>Mali</option>
<option value='mt'>Malta</option>
<option value='mh'>Marshall Islands</option>
<option value='mq'>Martinique</option>
<option value='mr'>Mauritania</option>
<option value='mu'>Mauritius</option>
<option value='yt'>Mayotte</option>
<option value='mx'>Mexico</option>
<option value='fm'>Micronesia, Federated States of</option>
<option value='md'>Moldova, Republic of</option>
<option value='mc'>Monaco</option>
<option value='mn'>Mongolia</option>
<option value='me'>Montenegro</option>
<option value='ms'>Montserrat</option>
<option value='ma'>Morocco</option>
<option value='mz'>Mozambique</option>
<option value='mm'>Myanmar</option>
<option value='na'>Namibia</option>
<option value='nr'>Nauru</option>
<option value='np'>Nepal</option>
<option value='nl'>Netherlands</option>
<option value='an'>Netherlands Antilles</option>
<option value='nc'>New Caledonia</option>
<option value='nz'>New Zealand</option>
<option value='ni'>Nicaragua</option>
<option value='ne'>Niger</option>
<option value='ng'>Nigeria</option>
<option value='nu'>Niue</option>
<option value='nf'>Norfolk Island</option>
<option value='mp'>Northern Mariana Islands</option>
<option value='no'>Norway</option>
<option value='om'>Oman</option>
<option value='pk'>Pakistan</option>
<option value='pw'>Palau</option>
<option value='ps'>Palestinian Territory, Occupied</option>
<option value='pa'>Panama</option>
<option value='pg'>Papua New Guinea</option>
<option value='py'>Paraguay</option>
<option value='pe'>Peru</option>
<option value='ph'>Philippines</option>
<option value='pn'>Pitcairn</option>
<option value='pl'>Poland</option>
<option value='pt'>Portugal</option>
<option value='pr'>Puerto Rico</option>
<option value='qa'>Qatar</option>
<option value='re'>Reunion</option>
<option value='ro'>Romania</option>
<option value='ru'>Russian Federation</option>
<option value='rw'>Rwanda</option>
<option value='sh'>Saint Helena</option>
<option value='kn'>Saint Kitts and Nevis</option>
<option value='lc'>Saint Lucia</option>
<option value='pm'>Saint Pierre and Miquelon</option>
<option value='vc'>Saint Vincent and The Grenadines</option>
<option value='ws'>Samoa</option>
<option value='sm'>San Marino</option>
<option value='st'>Sao Tome and Principe</option>
<option value='sa'>Saudi Arabia</option>
<option value='sn'>Senegal</option>
<option value='rs'>Serbia</option>
<option value='sc'>Seychelles</option>
<option value='sl'>Sierra Leone</option>
<option value='sg'>Singapore</option>
<option value='sk'>Slovakia</option>
<option value='si'>Slovenia</option>
<option value='sb'>Solomon Islands</option>
<option value='so'>Somalia</option>
<option value='za'>South Africa</option>
<option value='gs'>South Georgia and The South Sandwich Islands</option>
<option value='es'>Spain</option>
<option value='lk'>Sri Lanka</option>
<option value='sd'>Sudan</option>
<option value='sr'>Suriname</option>
<option value='sj'>Svalbard and Jan Mayen</option>
<option value='sz'>Swaziland</option>
<option value='se'>Sweden</option>
<option value='ch'>Switzerland</option>
<option value='sy'>Syrian Arab Republic</option>
<option value='tw'>Taiwan, Province of China</option>
<option value='tj'>Tajikistan</option>
<option value='tz'>Tanzania, United Republic of</option>
<option value='th'>Thailand</option>
<option value='tl'>Timor-leste</option>
<option value='tg'>Togo</option>
<option value='tk'>Tokelau</option>
<option value='to'>Tonga</option>
<option value='tt'>Trinidad and Tobago</option>
<option value='tn'>Tunisia</option>
<option value='tr'>Turkey</option>
<option value='tm'>Turkmenistan</option>
<option value='tc'>Turks and Caicos Islands</option>
<option value='tv'>Tuvalu</option>
<option value='ug'>Uganda</option>
<option value='ua'>Ukraine</option>
<option value='ae'>United Arab Emirates</option>
<option value='uk'>United Kingdom</option>
<option value='us'>United States</option>
<option value='um'>United States Minor Outlying Islands</option>
<option value='uy'>Uruguay</option>
<option value='uz'>Uzbekistan</option>
<option value='vu'>Vanuatu</option>
<option value='ve'>Venezuela</option>
<option value='vn'>Viet Nam</option>
<option value='vg'>Virgin Islands, British</option>
<option value='vi'>Virgin Islands, U.S.</option>
<option value='wf'>Wallis and Futuna</option>
<option value='eh'>Western Sahara</option>
<option value='ye'>Yemen</option>
<option value='zm'>Zambia</option>
<option value='zw'>Zimbabwe</option>".
			"</select>".
			"</p>".
			"<p>$humanReadableName</p>".
		"</div>\n";
}
?>