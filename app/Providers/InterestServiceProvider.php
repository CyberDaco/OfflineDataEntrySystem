<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeStreetExtension();

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
    
    private function composeStreetExtension(){
        view()->composer('interest.form',function($view){
           $view->with('street_extension',\App\Lookup::where('filter','street_extension')->pluck('name','name'));
        });
    }

}
