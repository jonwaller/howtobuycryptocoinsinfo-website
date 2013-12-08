<?
	require_once("lib/spyc.php");
	require_once("lib/howtobuy.php");

	$currentcoin = $_REQUEST['coin'];

	$coinnames = get_coin_data();
	$serviceData = get_service_data(); 

?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>How to Buy <? if ($currentcoin){ echo $coinnames[$currentcoin]; }else{ echo "Cryptocoins";} ?></title>
	<meta name="description" content="List of places to buy cryptocoins. Pay with bitcoin or other currencies.">
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="<?=($currentcoin)?"/img/coins/".$currentcoin.".png":"/favicon.png"?>" />
	<link rel="apple-touch-icon" href="/touchicon.png"/>
	<link rel="stylesheet" href="/css/style.css"/>
	
	<meta property="og:title" content="How to Buy <? if ($currentcoin){ echo $coinnames[$currentcoin]; }else{ echo "Cryptocoins";} ?>" />
	<meta property="og:description" content="List of places to buy <? if ($currentcoin){ echo $coinnames[$currentcoin]; }else{ echo "cryptocoins";} ?>. Pay with bitcoin or other currencies." />
	<meta property="og:image" content="http://<?=$_SERVER["SERVER_NAME"]?>/logo256.png" />
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>

	<script src="/js/jquery-1.9.min.js"></script>
	<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/js/jquery.migrate.js"></script>
	<script src="/js/jquery.placeholder.js"></script>
	<script src="/js/jquery.masonry.js"></script>
	<script src="/js/wherebuybitcoins.js"></script>
	<script src="/js/cryptocoins.js"></script>

</head>
<body <?
	if($currentcoin){
		echo "class='coin'";
	}
?>>
<style>
	#searchbox{
		background-image: url(#);
		<? if($currentcoin): ?>
			background-image: url(/img/coins/<?= $currentcoin ?>.png);
		<? endif; ?>
		background-position: 5px 6px;
		background-repeat: no-repeat;
	}
</style>

<!--Script for non-addthis like buttons-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=168262763382794";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
	<div style="float: right">
		<a href="mailto:info@howtobuycryptocoins.info?body=For additions, please provide: Site name, url, description, and list of supported cryptocoins (pleae use their code, like LTC or FTC). Multiple languages OK. Thanks.">Corrections / Updates?</a> |
		<a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">Contribute on Github</a>
	</div>  

	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style">
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
	</div>
</div>

<div id="headingarea"></div>

<div id="infoarea">

	<div id="warningarea">
		<div class="warningBox">
			<h3 class="box-title">Warning: Please be careful with your money. 
				<img style="float:right;padding:2px" src="img/miniflags/us.png" onclick="showLang('en')" title="English" /> 
				<img style="float:right;padding:2px" src="img/miniflags/cn.png" onclick="showLang('cn')" title="中文" /> 
				<img style="float:right;padding:2px" src="img/miniflags/es.png" onclick="showLang('es')" title="Español" /> 
				<img style="float:right;padding:2px" src="img/miniflags/jp.png" onclick="showLang('jp')" title="日本語" /> 
				<img style="float:right;padding:2px" src="img/miniflags/fr.png" onclick="showLang('fr')" title="Français" />
			</h3>
			<div class="box-content">
				<p>
					<small class="langBox en">
						When sending money to an exchange, you are trusting the operator to not steal your funds, and that their site is secure. <br/><br/>
						It is recommended you obtain the real-world identity of the operator and ensure that sufficient recourse is available.<br/>
						Exchanging or storing significant amounts of funds with third-parties is not recommended.<br/><br/>
						Cryptocoin services are not highly regulated so a service can continue operating even when it is widely believed that it is insecure or dishonest. Also, webpages recommending them (such as this one) may not be regularly updated. (However, saying that, the site is <a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">open-source</a>, and I try to respond quickly to <a href="mailto:info@howtobuycryptocoins.info">emails</a>.)
					</small>
					<small class="langBox cn">
						向交易所汇款时，要相信操作员不会盗取您的资金，而且交易所的网站很安全。
						<br/><br/>
						建议了解操作员的真实身份，并确保有足够的追索权。<br/>
						不建议向第三方兑换或储存大量资金。
						<br/><br/>
						对比特币服务的管控不是很严，因此即使人们广泛认为某种服务不安全或不可靠，这种服务也可以继续运行下去。此外，从中推荐这些服务的网页（如本网页）也可能未得到定期更新。（虽说如此，但此网站<a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">是开源</a>网站，而且我也尽快<a href="mailto:info@howtobuycryptocoins.info">对电子邮件</a>作出答复。）
					</small>
					<small class="langBox es">
						Al enviar dinero para un intercambio, estás confiando en que el agente no roba tus fondos y que su sitio web es seguro.
						<br/><br/>
						Se recomienda que obtengas la identidad real del agente y te asegures que dispone de los recursos suficientes.<br/>
						No es recomendable intercambiar o depositar cantidades importantes de dinero con terceras partes.
						<br/><br/>
						Los servicios Cryptocoin no están excesivamente regulados, por lo que un servicio puede continuar operando aún cuando es de sobra conocido que es inseguro o fraudulento. Además, las páginas web que los recomiendan (como esta) puede que no se actualicen con frecuencia (sin embargo, y una vez dicho esto, el sitio es <a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">de código abierto</a> e intento responder rápidamente a los <a href="mailto:info@howtobuycryptocoins.info">correos electrónicos</a>).
					</small>
					<small class="langBox jp">
						取引所に送金する場合、貴方はオペレーターが貴方の資金を盗まないということ、そしてサイトが安全であるということを信用するということになります。
						<br/><br/>
						オペレーターの実世界での情報と充分に遡及が可能であることを確認することが推奨されます。<br/>
						高額な資金を第三者と交換する、あるいは第三者に預けることは推奨されません。
						<br/><br/>
						クリプトコインの関連サービスには厳しい規制がなく、サービスが信頼できない、あるい不当なものだと広く考えられていても営業を続けることができます。また、それらを推奨するウェブサイト（このサイトもその一例です）は頻繁にアップデートされていない場合があります。（しかし、そうは言ってもこのサイトは<a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">オープンソース</a>であり、<a href="mailto:info@howtobuycryptocoins.info">メール</a>には迅速に返答する努力をしています。）
					</small>
					<small class="langBox fr">
						Lorsque vous envoyez de l'argent pour un échange, vous faites confiance au fait que l'opérateur ne va pas voler vos fonds, et que son site est sécurisé.
						<br/><br/>
						Il est recommandé que vous obteniez la véritable identité de l'opérateur et que vous vous assuriez que des recours suffisants sont disponibles.<br/>
						Échanger ou stocker des sommes importantes auprès de tiers n'est pas recommandé.
						<br/><br/>
						Les services cryptocoins ne sont pas hautement régulés, donc un service peut continuer à fonctionner même lorsqu'il est largement admis qu'il n'est pas sécurisé ou malhonnête. En outre, les pages web les recommandant (comme celle-ci) peuvent ne pas être mises à jour régulièrement. (Cependant, je précise que ce site est <a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">open-source</a>, et que j'essaie de répondre rapidement aux <a href="mailto:info@howtobuycryptocoins.info">emails</a>.)
					</small>

				</p>
			</div>
		</div>
	</div>

	<?if($currentcoin && $currentcoin=="btc"){?>
	<div id="btcRedirectArea">
		<div class="btcRedirectBox">
			<br />
			<center>To search Bitcoin exchanges by country, try <a href="http://howtobuybitcoins.info/">howtobuybitcoins.info</a>.</center>
			<br />
		</div>
	</div>
	<?}?>

	<div id="results">
		<?
			if($currentcoin){
				generate_coin_boxes($serviceData, $currentcoin);
			}
		?>
	</div>

	<?if($currentcoin){?>
	<div>
		<br />
		<center>Something missing? Send an <a href="mailto:info@howtobuycryptocoins.info?body=Please provide: Site name, URL, description, and list of supported cryptocoins (use their codes, like LTC or FTC). Thanks.">update</a> or <a href="https://github.com/jonwaller/howtobuycryptocoinsinfo-website">contribute on Github</a>.
		<br /><br />
		<div class="fb-comments" data-href="http://howtobuycryptocoins.info/<?=$currentcoin?>.html" data-width="963" data-numposts="10" data-colorscheme="light"></div>
		<br />	
	</div>
	<?}?>

</div>

<div id="footer">
	<div id="footercontent">
		<h3>You can buy these cryptocoins:</h3>
		
		<? foreach($coinnames as $code=>$name):?>
			<div class="coinlink">
				<a  rel="<?= $code ?>" title="<?= $name ?>" href="/<?= $code ?>.html">
					<span class="coinimg"><img src="/img/coins/<?= $code ?>.png"/></span> 
					<span class="coincode"><?= $code ?></span> 
					<span class="coinname"><?= $name ?></span>
				</a>
			</div>
		<? endforeach; ?>

		<br style="clear: both" />
		<br />
	</div>

</div>

<br />
<div style="text-align: center">
	<a href="https://plus.google.com/112885603889814071692/" rel="author" style="text-decoration:none;">
		<img 
			src="//ssl.gstatic.com/images/icons/gplus-16.png"
			alt="Google+"
			style="border:0;width:16px;height:16px;vertical-align: top;"
		/>
	</a>
	<a href="http://bitcoineast.com">A BitcoinEAST project</a> - <a href="http://coinwik.org/List_of_all_DCs">Coin specs</a> / <!--<a href="http://altcoins.com/scamcoins">scams</a>, and --><a href="http://coinmarketcap.com/"> prices</a> - <a href="http://howtobuybitcoins.info/">How to buy bitcoins</a>
	<br /><br />
</div>

<div id="heading">
	<h1><a href="/">How to buy<br>cryptocoins</a></h1>
	<input type="text" id="searchbox" onClick="this.select();" name="coin" value="<? if($currentcoin){ echo $coinnames[$currentcoin]; }?>" placeholder="Enter cryptocoin name or code" />
</div>

<script type="text/javascript">

	//Hack to allow to highlight in search result
	$.ui.autocomplete.prototype._renderItem = function (ul, item) {
		item.label = item.label.replace(
			new RegExp(
				"(?![^&;]+;)(?!<[^<>]*)(" + 
				$.ui.autocomplete.escapeRegex(this.term) + 
				")(?![^<>]*>)(?![^&;]+;)", "gi"),
				"<strong>$1</strong>"
		);
		
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a>" + item.label + "</a>")
		.appendTo(ul);
	};

	function showLang(langCode){
		$(".langBox").hide();
		$(".langBox."+langCode).show();
	}

	$(document).ready(function(){

		var currentCountryCode="<?=$currentcountry?>";
		var currentCoinCode="<?=$currentcoin?>";

		$(".langBox").hide();
		$(".langBox.en").show();


		var coins = [];
		$("#warningarea").masonry({itemSelector:".warningBox"});
		$("#btcRedirectArea").masonry({itemSelector:".btcRedirectBox"});
		$("#results").masonry({itemSelector:".serviceBox"});

		for(var coinIndex in coinNamesArr){
			var coinCode = coinNamesArr[coinIndex][0];
			var coinName = coinNamesArr[coinIndex][1];

			coinName=coinCode.toUpperCase()+" - "+coinName;

			coins.push({value:coinName, data:coinCode});
		}

		var searchbox=$('#searchbox');

		searchbox.autocomplete({
			source: coins,
			autoFocus: true,
			delay: 100,
			minLength: 0,
			select: function (e,ui) {
				window.location = "/"+ui.item.data+".html";
			}
		});

		searchbox.focus(function(event) {
			$('#searchbox').autocomplete('search', '');
		});

		searchbox.blur(function(event) {
			if ($(this).val() == '') $(this).val('<? if($currentcoin){ echo $coinnames[$currentcoin]; }?>');
		});

	});

</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4294505-16', 'howtobuycryptocoins.info');
  ga('send', 'pageview');

</script>

</body>
</html>
