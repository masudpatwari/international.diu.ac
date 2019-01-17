<?php
namespace App\Libraries;


class ImmediateCountry
{

    public static function country()
    {
        $ch = curl_init ();
        curl_setopt ($ch, CURLOPT_URL, "http://ipecho.net/plain");
        curl_setopt ($ch, CURLOPT_HEADER, 0);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        $ip = curl_exec ($ch);
        $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        curl_close ($ch);
        return [
            'request' => $dataArray->geoplugin_request,
            'countryName' => $dataArray->geoplugin_countryName,
            'countryCode' => $dataArray->geoplugin_countryCode,
            'continentName' => $dataArray->geoplugin_continentName,
            'continentCode' => $dataArray->geoplugin_continentCode,
            'timezone' => $dataArray->geoplugin_timezone,
            'currencyCode' => $dataArray->geoplugin_currencyCode,
            'currencySymbol' => $dataArray->geoplugin_currencySymbol,
            'currencySymbol_UTF8' => $dataArray->geoplugin_currencySymbol_UTF8,
            'currencyConverter' => $dataArray->geoplugin_currencyConverter,
        ];

    }
}
