<?php

require_once("lib/spyc.php");

?>
<?='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>How to Buy Bitcoins</title>
  <meta name="description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods.">
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="/favicon.png" />
  <link rel="apple-touch-icon" href="/touchicon.png"/>
  <link rel="stylesheet" href="/css/style.css"/>
  
  <meta property="og:title" content="How to Buy Bitcoins" />
  <meta property="og:description" content="Ways to buy Bitcoins in your country. Payments by bank transfer, PayPal and phone, as well as many other methods." />
  <meta property="og:image" content="http://<?=$_SERVER["SERVER_NAME"]?>/logo256.png" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700' rel='stylesheet' type='text/css'>

  <script src="/js/jquery-1.9.min.js"></script>
  <script src="/js/jquery.migrate.js"></script>
  <script src="/js/jquery.placeholder.js"></script>
  <script src="/js/jquery.autocomplete.min.js"></script>
  <script src="/js/jquery.masonry.js"></script>
  <script src="/js/wherebuybitcoins.js"></script>

</head>
<body>
  <div id="titlearea">
    <a href="/jp.html" class="flagicon" id="flag_jp"><img src="img/flags/jp.png" width="48" height="48"><br>Japan</a>
    <a href="/us.html" class="flagicon" id="flag_us"><img src="img/flags/us.png" width="48" height="48"><br>USA</a>
    <a href="/uk.html" class="flagicon" id="flag_uk"><img src="img/flags/uk.png" width="48" height="48"><br>UK</a>

  </div>

    <div id="infoarea">
      <div id="results">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>

    <div id="title">
      <img src="img/How_to_buy.png" alt="How to buy"><br>
      <img src="img/bitcoin.png" alt="bitcoins"><br>
      <input type="text" id="searchbox" name="country" placeholder="Enter country name">
    </div>

  <script>

  function loadCountry(code){
    $.get("/api.php?country="+code,function(data){
      $("body").addClass("country");
      $("#results").html(data);
      $("#results").masonry({itemSelector:".serviceBox"})
    })    
  }

  $(document).ready(function(){
    var countries = [];
    for(var code in getCountryName){
      var name = getCountryName[code];
      countries.push({value:name, data:code});
    }

    $('#searchbox').autocomplete({
      lookup: countries,
      onSelect: function (suggestion) {
        loadCountry(suggestion.data);
        window.location = "/#"+suggestion.data+".html"
      }
    });

    $(window).bind('hashchange', function() {
      if(window.location.hash){
        $("body").addClass("country");
      }else{
        $("body").removeClass("country");
      }
    });
  })
  </script>
</body>
</html>