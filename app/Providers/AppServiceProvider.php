<?php

namespace App\Providers;

use App\CurrencyConverter\CurrencyConvertContract;
use App\CurrencyConverter\ExternalCurrencyConvert;
use App\CurrencyConverter\LocalCurrencyConvert;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CurrencyConvertContract::class, function($app)  {
            if(request()->has('external')){
                return new ExternalCurrencyConvert();
            }
            return new LocalCurrencyConvert();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
