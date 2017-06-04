<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Form;

class MacrosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bed', 'components.macros', ['name', 'value' => null, 'attributes' => []]);
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //require app_path() . 'misc/form_macros.php';
    }
}
