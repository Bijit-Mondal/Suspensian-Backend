<?php
$uri = $_SERVER['REQUEST_URI'];
$uri = explode("/", $uri);
$file = $uri[3].'.json';
$jsonData = file_get_contents($file);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
echo $jsonData;
?>
