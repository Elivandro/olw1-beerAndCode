<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Http::macro('punkapi', function (){
            return Http::acceptJson()
                ->baseUrl(config('punkapi.url'))
                ->retry(3, 100);
        });
    }
}