<?php

require_once("lib/spyc.php");
require_once("lib/howtobuy.php");

$countrynames = Spyc::YAMLLoad("data/countries-sorted.yaml"); 
$currentcountry = $_REQUEST['country'];

?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>How to Buy Bitcoins <?php if ($currentcountry){ echo "in ".$countrynames[$currentcountry]; } ?></title>
  <meta name="description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods.">
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="/favicon.png" />
  <link rel="apple-touch-icon" href="/touchicon.png"/>
  <link rel="stylesheet" href="/css/style.css"/>
  
  <meta property="og:title" content="How to Buy Bitcoins" />
  <meta property="og:description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods." />
  <meta property="og:image" content="http://<?=$_SERVER["SERVER_NAME"]?>/logo256.png" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>

  <script src="/js/jquery-1.9.min.js"></script>
  <script src="/js/jquery.migrate.js"></script>
  <script src="/js/jquery.placeholder.js"></script>
  <script src="/js/jquery.autocomplete.min.js"></script>
  <script src="/js/jquery.masonry.js"></script>
  <script src="/js/wherebuybitcoins.js"></script>

</head>
<body <?php 
  if($currentcountry):
    echo "class='country'";
  endif;
?>>
<style>
#searchbox{
  background-image: url(#);
<?php if($currentcountry): ?>
  background-image: url(/img/miniflags/<?= $currentcountry ?>.png);
<?php endif; ?>
  background-position: 5px 8px;
  background-repeat: no-repeat;
}
</style>
<div id="header">
    <div style="float: right">
      <a href="mailto:info@howtobuybitcoins.info">Corrections / Updates?</a> |
      <a href="https://github.com/jonwaller/howtobuybitcoinsinfo-website">Contribute on Github</a>
    </div>  

    <div id="facebookCommentsBox"><div class="fb-comments" data-href="" data-num-posts="20" data-width="500"></div></div>
    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox addthis_default_style">
      <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
      <a class="addthis_button_tweet"></a>
      <a class="addthis_button_google_plusone_share"></a>
      <a class="addthis_button_email"></a>
    </div>

</div>

  <div id="headingarea">
    <div id="maparea">
    <a href="/jp.html" rel="jp" class="ajaxlink flagicon" id="flag_jp"><img src="img/flags/jp.png" width="48" height="48"><br>Japan</a>
    <a href="/us.html" rel="us" class="ajaxlink flagicon" id="flag_us"><img src="img/flags/us.png" width="48" height="48"><br>USA</a>
    <a href="/uk.html" rel="uk" class="ajaxlink flagicon" id="flag_uk"><img src="img/flags/uk.png" width="48" height="48"><br>UK</a>
    </div>
  </div>

    <div id="infoarea">
      <div id="results">
        <?php
if($currentcountry):
  $data = get_service_data("data/services.yaml");
  generate_country_boxes($data, $currentcountry);
endif;
        ?>
      </div>
    </div>

    <div id="footer">
      <div id="footercontent">
      <h3>You can buy bitcoins in these countries:</h3>
<?php foreach($countrynames as $code=>$name):?>
        <div class="countrylink"><a  rel="<?= $code ?>" title="<?= $name ?>" href="/<?= $code ?>.html"><span class="countrycode"><?= $code ?></span> <span class="countryname"><?= $name ?></span></a></div>
<? endforeach; ?>
      <br style="clear: both" />
      <br style="clear: both" />

      <div style="text-align: center">
          <a href="https://plus.google.com/112885603889814071692/" rel="author" style="text-decoration:none;">
            <img src="//ssl.gstatic.com/images/icons/gplus-16.png"
                 alt="Google+"
                 style="border:0;width:16px;height:16px;vertical-align: top;"/>
          </a>
          <a href="http://bitcoineast.com">This is a BitcoinEAST project</a>
      </div>
    </div>
    </div>

    <div id="heading">
      <h1><a href="/">How to buy<br>bitcoins in</a></h1>
      <input type="text" id="searchbox" onClick="this.select();" name="country" value="<?php if($currentcountry){ echo $countrynames[$currentcountry]; }?>" placeholder="Enter country name">
    </div>

  <script type="text/javascript">

  $(document).ready(function(){

    var countries = [];
    $("#results").masonry({itemSelector:".serviceBox"});

    for(var code in getCountryName){
      var name = getCountryName[code];
      countries.push({value:name, data:code});
    }

    $('#searchbox').autocomplete({
      lookup: countries,
      onSelect: function (suggestion) {
        window.location = "/"+suggestion.data+".html";
      }
    });


      fbEnsureInit(function() {
        var commentsBoxContainer=document.getElementById('facebookCommentsBox');
        while (commentsBoxContainer.hasChildNodes()) {
            commentsBoxContainer.removeChild(commentsBoxContainer.lastChild);
        }
        
        var newCommentBoxHtml='';;
        commentsBoxContainer.innerHTML=newCommentBoxHtml; 
        FB.XFBML.parse(commentsBoxContainer);
      });
  })
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

<script type="text/javascript">
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

</body>
</html>