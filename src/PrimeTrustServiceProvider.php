<?php

namespace BsiOrg\PrimeTrust;

use Illuminate\Support\ServiceProvider;

class PrimeTrustServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('primetrust', function ($app) {
            return new PrimeTrust();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/primetrust.php' => config_path('primetrust.php')
        ]);

        $this->mergeConfigFrom(__DIR__ . '/../config/primetrust.php', 'primetrust');
    }
}
