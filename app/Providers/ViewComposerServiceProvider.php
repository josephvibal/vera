<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {
   
    public function boot() {
        view()->composer("*","App\Http\ViewComposers\ListOfFile");
    }

    public function register()
    {
        //
    }	    
}