<?php

namespace ArneHendriksen\LaravelBreadcrumb;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class BreadcrumbServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('breadcrumb', function ($app) {
            return new Breadcrumb();
        });
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return [
            'breadcrumb',
        ];
    }
}