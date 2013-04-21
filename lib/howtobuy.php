<?php 

function generate_box($service){ ?>
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
}

function get_service_data($filename){
  return Spyc::YAMLLoad("data/services.yaml");
}

function generate_country_boxes($data, $currentcountry){
  foreach($data as $service):
    if(! $service["hidden"] ):
      if( in_array($currentcountry, $service["countries"]) ):
        generate_box($service); 
      endif;
    endif;
  endforeach;
}
?>