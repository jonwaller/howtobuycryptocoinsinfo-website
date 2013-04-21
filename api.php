<?php 

require_once("lib/spyc.php");
require_once("lib/howtobuy.php");

$data = get_service_data("data/services.yaml");

$currentcountry = $_REQUEST['country'];
if($currentcountry):
  generate_country_boxes($data, $currentcountry);
endif; 

?>