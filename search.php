<?php
$uri = $_SERVER['REQUEST_URI'];
$id = explode("=", $uri);
$id = $id[1];
$uri = explode("/", $uri);
$file = $uri[3].'.json';
$jsonData = file_get_contents($file);
$decoded_json = json_decode($jsonData, true);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
foreach ($decoded_json as $key=>$decode) {
    if($decode['id'] == $id){
      echo '{"id":"'.$decode['id'].'",'.
          '"title":"'.$decode['title'].'",'.
          '"description":"'.$decode['description'].'"}'
        ;
    }
}
?>
