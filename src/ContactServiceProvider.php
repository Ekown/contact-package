<?php

namespace Ekown\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Sets the path of the package's routes
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php');

        // Sets the path of the package's views
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');

        // Sets the path of the package's config files
        $this->mergeConfigFrom(__DIR__ . '/config/contact.php', 'contact');

        $this->publishes([__DIR__ . '/config/contact.php' => config_path('contact.php')]);
    }

    public function register()
    {

    }
}