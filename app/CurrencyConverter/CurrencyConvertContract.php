<?php

namespace App\CurrencyConverter;


interface CurrencyConvertContract
{
    
    public function convert($currency, $amount);
    
}