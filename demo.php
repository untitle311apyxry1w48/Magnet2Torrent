<?php
//ver1.0
	

$url = 'http://torrent.whiteholic.net/hash.json?q=FC8A15A2FAF2734DBB1DC5F7AFDC5C9BEAEB1F59';

$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

print_r(json_decode($result));



?>
