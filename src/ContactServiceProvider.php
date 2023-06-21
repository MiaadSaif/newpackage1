<?php

namespace Acaothman\Contact;


use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or services
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadRoutesFrom(__DIR__.'/routes', 'web.php');
    }
}
