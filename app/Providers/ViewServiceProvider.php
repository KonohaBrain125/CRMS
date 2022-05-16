<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('control-panel.*', function ($view) {
            View::share('activeNavItem', 'dashboard');
        });

        View::composer('control-panel.organizations.*', function ($view) {
            View::share('activeNavItem', 'organizations');
        });

        View::composer('control-panel.clients.*', function ($view) {
            View::share('activeNavItem', 'clients');
        });
    }
}