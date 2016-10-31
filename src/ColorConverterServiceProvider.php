<?php

use Illuminate\Support\ServiceProvider;

class ColorConverterServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('color.converter', function ($app) {
            return new ColorConverter;
        });
    }
}
