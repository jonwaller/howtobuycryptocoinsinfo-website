<?
function generate_box($service){ ?>
  <div class="serviceBox <?php 
    foreach($service["countries"] as $country):
      echo $country." ";
    endforeach;
  ?>">
      <a href="<?= $service["url"] ?>" target="_blank">
        <h3 class="box-title">
            <img width="16" height="16" src="<?= $service["icon"] ?>"> <?= $service["label"] ?>
        </h3>
      </a>
    <div class="box-content">
      <?= $service["content"] ?>
    </div>
    <div class="left">
      <div class="fb-like" data-href="<?= $service["url"] ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    </div>
    <div class="right">
      <a class="button" href="<?= $service["url"] ?>" target="_blank">Buy bitcoins</a>
    </div>
  </div>
  <?
}

function get_service_data($filename){
  return Spyc::YAMLLoad("data/services.yaml");
}

function generate_country_boxes($data, $currentcountry){
  foreach($data as $service){
    if(! $service["hidden"] && in_array($currentcountry, $service["countries"]) && isset($service["priority"]) && in_array($currentcountry, $service["priority"]) ){
      generate_box($service); 
    }
  }
  foreach($data as $service){
    if(! $service["hidden"] && in_array($currentcountry, $service["countries"]) && (! isset($service["priority"]) || ! in_array($currentcountry, $service["priority"]) ) ){
      generate_box($service); 
    }
  }
}
?>
