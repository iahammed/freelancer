<?php

namespace App\CurrencyConverter;

class ExternalCurrencyConvert implements CurrencyConvertContract
{
    /**
     * Currency Converter form external source 
     * http://api.exchangeratesapi.io
     * @param String $currency
     * @param Number $amount
     * @return Array
     */
    public function convert($currency, $amount)
    {

        /** 
         * With Paid version of this endpoint  
         * change  base symble to USD|EUR|GBP 
         * which will return easy to calculated convertion rate 
         */
        $url = `http://api.exchangeratesapi.io/v1/latest
                    ?access_key=4d5240edaf1cc64905616bc1bf3ac772 
                    &base=USD
                    &symbols=GBP,USD,EUR`;
        /** here base rate is EUR 
         *  need to convert 
         */
        $url = env('EXCHANGE_URL');
        
        $prices = file_get_contents($url, true);
        if ($prices === false) {
            /** Local Exchange rate */
            $gbp2usd = 1.3;
            $gbp2eur = 1.1;
            $eur2gbp = 0.9;
            $eur2usd = 1.2;
            $usd2gbp = 0.7;
            $usd2eur = 0.8;
         } else {
            $price = json_decode($prices)->rates;
            /** base on EUR */
            $eurRate = 1;
            $usdRate = $price->USD;
            $gbpRate = $price->GBP;
            /** External Exchange rate */
            $gbp2usd = $usdRate / $gbpRate;
            $gbp2eur = 1 / $gbpRate;
            $eur2gbp = $gbpRate;
            $eur2usd = $usdRate;
            $usd2gbp = $gbpRate / $usdRate;
            $usd2eur = 1 / $usdRate;
        }
        $data = [
            'EUR'   => 0,
            'USD'   => 0,
            'GBP'   => 0,
        ];

        if($currency === 'EUR'){
            $eur = $amount; 
            $usd = $amount * $eur2usd;
            $gbp = $amount * $eur2gbp;
        }

        if($currency === 'GBP'){
            $gbp = $amount; 
            $eur = $amount * $gbp2eur;
            $usd = $amount * $gbp2usd;
        }

        if($currency === 'USD'){
            $usd = $amount;
            $eur = $amount * $usd2eur;
            $gbp = $amount * $usd2gbp;
        }

        $data = [
            'EUR'   => $eur,
            'USD'   => $usd,
            'GBP'   => $gbp,
        ];

        return $data;
    }
}