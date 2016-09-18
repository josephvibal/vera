<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Validator;

class CustomValidationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       Validator::extend('strength', 'App\Http\CustomValidator@validateStrength');
       Validator::extend('check_hash', 'App\Http\CustomValidator@validateHash');
       Validator::extend('check_if_current_password', 'App\Http\CustomValidator@validateCurrent');
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
