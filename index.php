<?php
$url = "http://ipwho.is/" . $_SERVER['REMOTE_ADDR'];
$json = file_get_contents($url);
$json = json_decode($json);
$ip = $json->ip;
$countrycode = $json->country_code;
$country = $json->country;
echo($ip . "|||" . $countrycode . "|||" . $country);
?>