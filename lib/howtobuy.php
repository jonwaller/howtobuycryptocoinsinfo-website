<?
function get_service_data(){
  return Spyc::YAMLLoad("data/services.yaml");
}

function get_country_data(){
  return Spyc::YAMLLoad("data/countries-codesorted.yaml");
}

function get_coin_data(){
  return Spyc::YAMLLoad("data/coins-codesorted.yaml");
}

function generate_country_box($service,$currentCountryCode){

  $locationHtml="";
  if (isset($service["location"])){
    foreach($service["location"] as $locationCountryCode){
      if ($locationCountryCode == $currentCountryCode){
        $locationHtml.='<img src="/img/miniflags/'.$locationCountryCode.'.png" onclick="return false;" title="Based in this country." style="float:right;padding:2px;margin-right:0px" />';
      }
    }
  }

  ?>
  <div class="serviceBox <? 
    foreach($service["countries"] as $country):
      echo $country." ";
    endforeach;
  ?>">
      <a href="<?= $service["url"] ?>" target="_blank">
        <h3 class="box-title">
            <img width="16" height="16" src="<?= $service["icon"] ?>"> <?= $service["label"] ?> <?=$locationHtml?>
        </h3>
      </a>
    <div class="box-content">
      <?= $service["content"] ?>
    </div>
    <div class="left">
      <div class="fb-like" data-href="<?= $service["url"] ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </div>
    <div class="right">
      <a class="button" href="<?= $service["url"] ?>" target="_blank">Buy Bitcoins</a>
    </div>
  </div>
  <?
}

function generate_coin_box($service,$currentCoinCode){
  ?>
  <div class="serviceBox">
      <a href="<?= $service["url"] ?>" target="_blank">
        <h3 class="box-title">
            <img width="16" height="16" src="<?= $service["icon"] ?>"> <?= $service["label"] ?> 
        </h3>
      </a>
    <div class="box-content">
      <p><?= $service["content"] ?></p>
    </div>
    <div class="left">
      <div class="fb-like" data-href="<?= $service["url"] ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </div>
    <div class="right">
      <a class="button" href="<?= $service["url"] ?>" target="_blank">Buy <?=strtoupper($currentCoinCode)?></a>
    </div>
  </div>
  <?
}

function generate_country_boxes($data, $currentCountryCode){
  foreach($data as $service){
    if(! $service["hidden"] && in_array($currentCountryCode, $service["countries"]) && isset($service["location"]) && in_array($currentCountryCode, $service["location"]) ){
      generate_country_box($service,$currentCountryCode); 
    }
  }
  foreach($data as $service){
    if(! $service["hidden"] && in_array($currentCountryCode, $service["countries"]) && (! isset($service["location"]) || ! in_array($currentCountryCode, $service["location"]) ) ){
      generate_country_box($service,$currentCountryCode); 
    }
  }
}

function generate_coin_boxes($data, $currentCoinCode){
  foreach($data as $service){
   if(
    ! $service["hidden"] && $service["coins"] && 
    (in_array(strtoupper($currentCoinCode), $service["coins"]) || 
    in_array(strtolower($currentCoinCode), $service["coins"]))
    ){
      generate_coin_box($service,$currentCoinCode); 
    }
  }
}
?>

