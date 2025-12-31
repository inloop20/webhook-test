<?php

namespace App\Providers;

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
         $this->app->resolving(VerifyCsrfToken::class, function ($middleware) {
        $middleware->except[] = 'webhook/github';
    });
    }
}
