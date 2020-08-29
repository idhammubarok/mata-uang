<?php
namespace MubarokDev\MataUang;


use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */

    /**
     * Register the service provider.
     *
     * @throws \Exception
     * @return void
     */
    public function register()
    {
        
        require_once app_path() . './idhammubarok/mata-uang/src/Format.php';

    }

}