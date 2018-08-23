<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Stichoza\GoogleTranslate\TranslateClient;

class TranslateProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
   
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $tr = new TranslateClient();
        $tr->setSource('pt-br');
        $tr->setTarget('en');
        $tr->setUrlBase('http://translate.google.cn/translate_a/single'); // Set Google Translate URL base (This is not necessary, only for some countries)
        
        $this->app->singleton(TranslateClient::class, $tr);
    }
}
