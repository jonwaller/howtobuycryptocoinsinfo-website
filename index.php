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

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="/js/wherebuybitcoins.js"></script>
	<script src="/js/jquery.masonry.js"></script>
	<script type="text/javascript">

	var flagsBecameSmall=false;

  function showInfo(countryCode){

    var countryName = getCountryName[countryCode];
    
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
        
        var newCommentBoxHtml='<div class="fb-comments" data-href="http://<?=$_SERVER["SERVER_NAME"]?>/'+countryCode+'.html" data-num-posts="20" data-width="500"></div>';;
        commentsBoxContainer.innerHTML=newCommentBoxHtml; 
        FB.XFBML.parse(commentsBoxContainer);
      });

    }else{
      $('#countryNameBox').html('');
      document.title = 'How to Buy Bitcoin';      
    }

    //Hide old stuff
    //$('.serviceBox').hide();
    $('.infoBox').hide();

    //Show new stuff
    //$('.'+countryCode).show(); //But still hidden by infoBox
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
//    if(window.location.hash) {
      //Puts hash in variable, and removes the # character
      // var countryCode = window.location.hash.substring(1); 
      var countryCode = '<?=$_REQUEST['country']?>';

      if (countryCode.length==2 && countryCode!=='xx'){
        showInfo(countryCode);  
      }
//    }
  }

  $(document).ready(function(){
    
    $('.infoBox').hide();
    $('body').click(function(){
      $('#other').hide();
    })
    //If there is a country hash
    goToCountryInHash();

    $(window).bind('hashchange', function() {
      goToCountryInHash();
    });

/*    $(".flagButton").click(function(){ 
      var flagIdClicked = $(this)[0].id;
      var countryCode = flagIdClicked.replace('#','');
      if (countryCode!=='xx'){
        location.href='/'+countryCode+".html";
        //showInfo(countryCode);  
      }    
    });*/

      $("#countryDropdown").change(function () {
      	$("select option:selected").each(function () {
        	var countryCodeFromDropdown=$(this).val();
        	if (countryCodeFromDropdown!=='xx'){
          	location.href='/'+countryCodeFromDropdown+".html";
          //showInfo(countryCodeFromDropdown);  
        	}
      	});
	    }).change();

  });

	</script>

</head>
<body>
<div id="fb-root"></div>

<?php
// Load the service "database":
require_once("lib/spyc.php");
$data = Spyc::YAMLLoad("data/services.yaml");


?>
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
	<a href="https://plus.google.com/112885603889814071692/" rel="author" style="text-decoration:none;">
		<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;vertical-align: top;"/>
	</a> <a href="http://www.jonwaller.net/">Me</a> | <a href="mailto:info@howtobuybitcoins.info">Comments / Updates?</a>
</div>	
<br style="clear:both"/>

<h1>How to Buy Bitcoins</h1>

<div class="flagButtons">
	<h2>I live in:</h2>

<?php

/* Generate the buttons using the countries.yml file,
  $promoted holds country codes of buttons that should show up first.
*/ 

$promoted = array("us", "uk", "jp");
$countrynames = Spyc::YAMLLoad("data/countries.yaml"); 

  function makeFlagButton($countryCode,$humanReadableName, $small=false){
    if($small):
      $flagImg = "<img src='/img/miniflags/$countryCode.png' alt='Flag for $humanReadableName' />";
    else:
      $flagImg = "<img src='/img/flags/$countryCode.png' alt='Flag for $humanReadableName' />";
    endif;
    echo "<a href='/$countryCode.html'><div id='#$countryCode' class='flagButton'>".
      "<p>$flagImg</p>".
      "<p>$humanReadableName</p>".
      "</div></a>\n";
  }

  foreach($promoted as $code):
    makeFlagButton($code,$countrynames[$code]);
  endforeach;

?>
  <div id="other">
    <ul>
<?php foreach($countrynames as $code=>$name): 
        if( ! in_array($code, $promoted) ): ?>
        <li><a href="/<?= $code ?>.html"><?= $name ?></a></li>
<?        endif;
      endforeach; ?>
    </ul>
  </div>
 <div id='#xx' class='flagButton' style='width:300px'>
    <p>
      <select id='countryDropdown'>
        <option value='xx'>[Choose a country]</option>
<?php foreach($countrynames as $code=>$name): 
        if( ! in_array($code, $promoted) ): ?>        
        <option value='<?= $code; ?>'><?= $name; ?></option>
<?php   endif;
      endforeach; ?>
      </select>
    </p>
    <p>Somewhere else</p>
  </div>
  <br style="clear:both" />

</div>

<div class="infoBoxes">

	<div class="infoBox">
		<h2 id="countryNameBox"></h2>

<?php 

$currentcountry = $_REQUEST['country'];
if($currentcountry):
	foreach($data as $service):
		if(! $service["hidden"] ):
			if( in_array($currentcountry, $service["countries"]) ):
		?>
			<div class="serviceBox <?php 
				foreach($service["countries"] as $country):
					echo $country." ";
				endforeach;
			?>">
				<a href="<?= $service["url"] ?>" target="_blank">
					<img width="16" height="16" src="<?= $service["icon"] ?>"> <?= $service["label"] ?>
				</a>
				<?= $service["content"] ?>
			</div>
	<?php
			endif;
		endif;
	endforeach;


endif; 
?>


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
			<a href="https://plus.google.com/112885603889814071692/" rel="author" style="text-decoration:none;">
				<img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;vertical-align: top;"/>
			</a> <a href="http://www.jonwaller.net/">Me</a> | <a href="mailto:info@howtobuybitcoins.info">Comments / Updates?</a>
		</div>	
		<!-- AddThis Button END -->

	</div>

</div>


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

<?php

?>