<?php

namespace FredBradley\LaravelImcapi;

use Illuminate\Support\ServiceProvider;

class LaravelImcapiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'fredbradley');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'fredbradley');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/imcapi.php', 'imcapi');

        // Register the service the package provides.
        $this->app->singleton('laravelimcapi', function ($app) {
            return new LaravelImcapi;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelimcapi'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelimcapi.php' => config_path('laravelimcapi.php'),
        ], 'laravelimcapi.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/fredbradley'),
        ], 'laravelimcapi.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/fredbradley'),
        ], 'laravelimcapi.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/fredbradley'),
        ], 'laravelimcapi.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
