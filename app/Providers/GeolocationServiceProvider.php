<?php

namespace App\Providers;

use App\Service\Geolocation\Geolocation;
use App\Service\Map\Map;
use App\Service\Satellite\Satellite;
use Illuminate\Support\ServiceProvider;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Geolocation',function($app) {
            $map = new Map();
            $satellite = new Satellite();
            return new Geolocation($map, $satellite);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
