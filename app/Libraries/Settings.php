<?php

function current_country()
{

    $ch = curl_init ();
    curl_setopt ($ch, CURLOPT_URL, "http://ipecho.net/plain");
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

    $ip = curl_exec ($ch);
    echo "The public ip for this server is: $ip";
    curl_close ($ch);

    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    return  "Hello visitor from: ".$dataArray->geoplugin_countryName;

}
