<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

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
        // Register alias middleware for admin secret checker.
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('admin.secret', \App\Http\Middleware\RequireAdminSecret::class);
    }
}
