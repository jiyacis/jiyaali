<?php

namespace JiyaAli\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register controller
        $this->app->make('JiyaAli\HelloWorld\HelloWorldController');

        // register views folder
        $this->loadViewsFrom(__DIR__.'/views', 'helloworld');

        // register migrations folder for php artisan migrate
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // register routes for boot
        include __DIR__.'/routes.php';
    }
}
