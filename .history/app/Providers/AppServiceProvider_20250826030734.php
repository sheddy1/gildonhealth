<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force the application to use HTTPS for all generated URLs
        // only when the environment is set to 'production'.
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
