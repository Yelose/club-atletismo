<?php

namespace App\Providers;

use App\Models\ExternalLink;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("components.footer", function ($view) {
            $view->with("links", ExternalLink::all());
        });
    }
}
