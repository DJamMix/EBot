<?php

namespace djammix\EBot;

use Illuminate\Support\ServiceProvider;

class EBotServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ebot', function ($app) {
            return new EBot();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/ebot.php', 'ebot'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ebot.php' => config_path('ebot.php'),
        ], 'ebot-config');
    }
}