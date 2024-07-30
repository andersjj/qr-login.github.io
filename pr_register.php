<?php

header("Access-Control-Allow-Origin: *");

$url = "https://www.widget-list.com/otp-ui/register_user.php?".$_SERVER['QUERY_STRING'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($ch); 

?>