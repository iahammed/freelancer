<?php

namespace App\CurrencyConverter;

class LocalCurrencyConvert implements CurrencyConvertContract
{
    /**
     * Currency Converter form predefine source 
     * @param String $currency
     * @param Number $amount
     * @return Array
     */
    public function convert($currency, $amount)
    {
        /** Local Exchange rate */
        $gbp2usd = 1.3;
        $gbp2eur = 1.1;
        $eur2gbp = 0.9;
        $eur2usd = 1.2;
        $usd2gbp = 0.7;
        $usd2eur = 0.8;

        $data = [
            'EUR'   => 0,
            'USD'   => 0,
            'GBP'   => 0,
        ];

        if($currency === 'EUR'){
            $data = [
                'EUR'   => $amount,
                'USD'   => $amount * $eur2usd,
                'GBP'   => $amount * $eur2gbp,
            ];
        }
        if($currency === 'GBP'){
            $data = [
                'EUR'   => $amount * $gbp2eur,
                'USD'   => $amount * $gbp2usd,
                'GBP'   => $amount,
            ];
        }

        if($currency === 'USD'){
            $data = [
                'EUR'   => $amount * $usd2eur,
                'USD'   => $amount,
                'GBP'   => $amount * $usd2gbp,
            ];
        }
        return $data;
    }
}