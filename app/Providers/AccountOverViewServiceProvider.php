<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccountOverViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {//AccountOverView
        view()->composer("profile/*","App\Http\ViewComposers\AccountOverView");
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
