<?php
namespace App\Libraries;

use Illuminate\Support\Facades\Cache;

class ConvertCurrency
{

    public static function currency_rate( $currency_code )
    {
        if (!Cache::has($currency_code)) {
            $currency = 'BDT_'.$currency_code;
            $ch = curl_init ();
            curl_setopt ($ch, CURLOPT_URL, "https://free.currencyconverterapi.com/api/v6/convert?q=".$currency."&compact=ultra&apiKey=469782a968dc57b69bd8");
            curl_setopt ($ch, CURLOPT_HEADER, 0);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec ($ch);
            $json = json_decode($response);

            if(!empty($json->$currency))
            {
                $expiresAt = now()->addMinutes(1440);
                Cache::put($currency_code, $json->$currency, $expiresAt);
                return [
                    'currencyCode' => $currency_code,
                    'currency' => $json->$currency,
                ];
            }
        }
        else
        {
            return [
                'currencyCode' => $currency_code,
                'currency' => Cache::get($currency_code),
            ];
        }
    }
}
