<?php

namespace Modules\Main\Providers;

use Illuminate\Support\ServiceProvider;

class MainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'main');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }
}
