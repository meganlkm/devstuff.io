<?php

$url = "http://baconipsum.com/api/?type=all-meat&paras=2&start-with-lorem=1";

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url
));
$resp = curl_exec($curl);
curl_close($curl);

var_dump($resp);
