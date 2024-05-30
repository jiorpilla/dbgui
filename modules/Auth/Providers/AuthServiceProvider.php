<?php

namespace Modules\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
//        $this->loadViewsFrom(__DIR__ . '/../Views', 'auth');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }
}
