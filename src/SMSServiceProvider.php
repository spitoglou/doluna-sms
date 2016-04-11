<?php

namespace Spitoglou\SMS;

use Illuminate\Support\ServiceProvider;

/**
 * Class SMSServiceProvider
 * @package Spitoglou\SMS
 */
class SMSServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing configs
        $this->publishes([
            __DIR__ . '/config/sms.php' => config_path('sms.php'),
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SMSClass', 'Spitoglou\SMS\SMSClass');
    }

}
