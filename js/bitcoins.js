var flagsBecameSmall=false;

  var getCountryName = {

     gw:"Guinea-Bissau",
     gu:"Guam",
     gt:"Guatemala",
     gs:"South Georgia and the South Sandwich Islands",
     gr:"Greece",
     gq:"Equatorial Guinea",
     gp:"Guadeloupe",
     gy:"Guyana",
     gg:"Guernsey",
     gf:"French Guiana",
     ge:"Georgia",
     gd:"Grenada",
     gb:"United Kingdom", //Not using this
     uk:"United Kingdom",
     ga:"Gabon",
     gn:"Guinea",
     gm:"Gambia",
     gl:"Greenland",
     gi:"Gibraltar",
     gh:"Ghana",
     lb:"Lebanon",
     lc:"Saint Lucia",
     la:"Lao People&#39;s Democratic Republic",
     tv:"Tuvalu",
     tw:"Taiwan, Province of China",
     tt:"Trinidad and Tobago",
     tr:"Turkey",
     lk:"Sri Lanka",
     li:"Liechtenstein",
     lv:"Latvia",
     to:"Tonga",
     tl:"Timor-Leste",
     tm:"Turkmenistan",
     lr:"Liberia",
     ls:"Lesotho",
     th:"Thailand",
     tf:"French Southern Territories",
     tg:"Togo",
     td:"Chad",
     tc:"Turks and Caicos Islands",
     ly:"Libyan Arab Jamahiriya",
     "do":"Dominican Republic",
     dm:"Dominica",
     dj:"Djibouti",
     dk:"Denmark",
     de:"Germany",
     ye:"Yemen",
     jp:"Japan",
     uy:"Uruguay",
     yt:"Mayotte",
     kn:"Saint Kitts and Nevis",
     qa:"Qatar",
     zm:"Zambia",
     eh:"Western Sahara",
     be:"Belgium",
     ee:"Estonia",
     eg:"Egypt",
     za:"South Africa",
     ec:"Ecuador",
     sj:"Svalbard and Jan Mayen",
     sg:"Singapore",
     mk:"Macedonia, the former Yugoslav Republic of",
     et:"Ethiopia",
     zw:"Zimbabwe",
     es:"Spain",
     er:"Eritrea",
     ru:"Russian Federation",
     rw:"Rwanda",
     rs:"Serbia",
     na:"Namibia",
     re:"Reunion",
     ro:"Romania",
     tk:"Tokelau",
     tz:"Tanzania, United Republic of",
     bd:"Bangladesh",
     wf:"Wallis and Futuna",
     bf:"Burkina Faso",
     bg:"Bulgaria",
     vg:"Virgin Islands, British",
     ba:"Bosnia and Herzegovina",
     bb:"Barbados",
     bl:"Saint Barthelemy",
     bm:"Bermuda",
     bn:"Brunei Darussalam",
     bo:"Bolivia, Plurinational State of",
     bh:"Bahrain",
     bi:"Burundi",
     bj:"Benin",
     bt:"Bhutan",
     jm:"Jamaica",
     bv:"Bouvet Island",
     jo:"Jordan",
     ws:"Samoa",
     br:"Brazil",
     bs:"Bahamas",
     je:"Jersey",
     by:"Belarus",
     bz:"Belize",
     tn:"Tunisia",
     om:"Oman",
     ua:"Ukraine",
     bw:"Botswana",
     mz:"Mozambique",
     ck:"Cook Islands",
     ci:"Cote d&#39;Ivoire",
     ch:"Switzerland",
     co:"Colombia",
     cn:"China",
     cm:"Cameroon",
     cl:"Chile",
     cc:"Cocos (Keeling) Islands",
     ca:"Canada",
     cg:"Congo",
     cf:"Central African Republic",
     cd:"Congo, the Democratic Republic of the",
     cz:"Czech Republic",
     cy:"Cyprus",
     cx:"Christmas Island",
     cr:"Costa Rica",
     cv:"Cape Verde",
     cu:"Cuba",
     ad:"Andorra",
     pr:"Puerto Rico",
     ps:"Palestinian Territory, Occupied",
     pw:"Palau",
     pt:"Portugal",
     py:"Paraguay",
     lt:"Lithuania",
     mu:"Mauritius",
     iq:"Iraq",
     lu:"Luxembourg",
     pf:"French Polynesia",
     pg:"Papua New Guinea",
     pe:"Peru",
     pk:"Pakistan",
     ph:"Philippines",
     pn:"Pitcairn",
     pl:"Poland",
     pm:"Saint Pierre and Miquelon",
     hr:"Croatia",
     al:"Albania",
     ht:"Haiti",
     hu:"Hungary",
     hk:"Hong Kong",
     hn:"Honduras",
     vn:"Viet Nam",
     hm:"Heard Island and McDonald Islands",
     me:"Montenegro",
     md:"Moldova, Republic of",
     mg:"Madagascar",
     mf:"Saint Martin (French part)",
     ma:"Morocco",
     mc:"Monaco",
     uz:"Uzbekistan",
     mm:"Myanmar",
     ml:"Mali",
     mo:"Macao",
     mn:"Mongolia",
     mh:"Marshall Islands",
     us:"United States",
     um:"United States Minor Outlying Islands",
     mt:"Malta",
     mw:"Malawi",
     mv:"Maldives",
     mq:"Martinique",
     mp:"Northern Mariana Islands",
     ms:"Montserrat",
     mr:"Mauritania",
     im:"Isle of Man",
     ug:"Uganda",
     my:"Malaysia",
     mx:"Mexico",
     il:"Israel",
     va:"Holy See (Vatican City State)",
     vc:"Saint Vincent and the Grenadines",
     ae:"United Arab Emirates",
     ve:"Venezuela, Bolivarian Republic of",
     ag:"Antigua and Barbuda",
     af:"Afghanistan",
     ai:"Anguilla",
     vi:"Virgin Islands, U.S.",
     is:"Iceland",
     ir:"Iran, Islamic Republic of",
     am:"Armenia",
     it:"Italy",
     ao:"Angola",
     an:"Netherlands Antilles",
     aq:"Antarctica",
     as:"American Samoa",
     ar:"Argentina",
     au:"Australia",
     vu:"Vanuatu",
     aw:"Aruba",
     "in":"India",
     ax:"Aland Islands",
     az:"Azerbaijan",
     ie:"Ireland",
     id:"Indonesia",
     sa:"Saudi Arabia",
     nl:"Netherlands",
     no:"Norway",
     pa:"Panama",
     dz:"Algeria",
     nc:"New Caledonia",
     ne:"Niger",
     nf:"Norfolk Island",
     ng:"Nigeria",
     nz:"New Zealand",
     sh:"Saint Helena, Ascension and Tristan da Cunha",
     np:"Nepal",
     so:"Somalia",
     nr:"Nauru",
     nu:"Niue",
     fr:"France",
     io:"British Indian Ocean Territory",
     ni:"Nicaragua",
     kz:"Kazakhstan",
     fi:"Finland",
     fj:"Fiji",
     fk:"Falkland Islands (Malvinas)",
     fm:"Micronesia, Federated States of",
     fo:"Faroe Islands",
     tj:"Tajikistan",
     sz:"Swaziland",
     sy:"Syrian Arab Republic",
     kg:"Kyrgyzstan",
     ke:"Kenya",
     sr:"Suriname",
     ki:"Kiribati",
     kh:"Cambodia",
     sv:"El Salvador",
     km:"Comoros",
     st:"Sao Tome and Principe",
     sk:"Slovakia",
     kr:"Korea, Republic of",
     si:"Slovenia",
     kp:"Korea, Democratic People&#39;s Republic of",
     kw:"Kuwait",
     sn:"Senegal",
     sm:"San Marino",
     sl:"Sierra Leone",
     sc:"Seychelles",
     sb:"Solomon Islands",
     ky:"Cayman Islands",
     at:"Austria",
     se:"Sweden",
     sd:"Sudan"
  }

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

  function goToCountryInHash(country){
//    if(window.location.hash) {
      //Puts hash in variable, and removes the # character
      // var countryCode = window.location.hash.substring(1); 
      var countryCode = country;

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

    $(".flagButton").click(function(){ 
      var flagIdClicked = $(this)[0].id;
      var countryCode = flagIdClicked.replace('#','');
      if (countryCode!=='xx'){
        location.href='/'+countryCode+".html";
        //showInfo(countryCode);  
      }    
    });

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