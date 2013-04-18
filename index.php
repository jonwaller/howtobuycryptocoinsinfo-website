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
$datafile = "data/services.yaml";
$data = Spyc::YAMLLoad($datafile);

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
	<?php makeFlagButton('us','United States');?>
	<?php makeFlagButton('uk','United Kingdom');?>
	<?php makeFlagButton('jp','Japan / 日本');?>
	<?php makeOtherButton('Somewhere else');?>
	<br style="clear:both" />
</div>

<div class="infoBoxes">

	<div class="infoBox">
		<h2 id="countryNameBox"></h2>

<?php 

$currentcountry = $_REQUEST['country'];

if( $currentcountry ):

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
function makeFlagButton($countryCode,$humanReadableName){
	$flagImg = "<img src='/img/flags/$countryCode.png' alt='Flag for $humanReadableName' />";
	echo "<a href='/$countryCode.html'><div id='#$countryCode' class='flagButton'>".
			"<p>$flagImg</p>".
			"<p>$humanReadableName</p>".
		"</div></a>\n";
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