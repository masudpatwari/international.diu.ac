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
            curl_setopt ($ch, CURLOPT_URL, "http://free.currencyconverterapi.com/api/v5/convert?q=".$currency."&compact=y");
            curl_setopt ($ch, CURLOPT_HEADER, 0);
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec ($ch);
            $json = json_decode($response);

            if(!empty($json->$currency->val))
            {
                $expiresAt = now()->addMinutes(100);
                Cache::put($currency_code, $json->$currency->val, $expiresAt);
                return [
                    'currencyCode' => $currency_code,
                    'currency' => $json->$currency->val,
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
