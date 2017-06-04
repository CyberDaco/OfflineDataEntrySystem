<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AUNewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeStreetExtension();
        $this->composeListingType();
        $this->composePropertyType();
        $this->composeStates();
        $this->composeStatesAUPostCodeAdd();
        $this->composeStatesAUPostCodeEdit();
        $this->composeStatesPubListAdd();
        $this->composeStatesPubListEdit();
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
        view()->composer(array('aunews.formaddress','aunews.propertyaddress','aunews.invalid.invalidform'),function($view){
           $view->with('street_extension',\App\Lookup::where('filter','street_extension')->lists('name','name'));
        });
    }

    private function composeListingType(){
        view()->composer(array('aunews.partials.propertysaledetails','aunews.invalid.invalidform'),function($view){
           $view->with('listing_type',\App\Lookup::where('filter','listing_type')->lists('name','code'));
        });
    }
    
    private function composePropertyType(){
        view()->composer(array('aunews.formaddress','aunews.propertyaddress','aunews.invalid.invalidform'),function($view){
           $view->with('prop_type',\App\Lookup::where('filter','property_type')->lists('name','code'));
        });
    }
    
    private function composeStates(){
        view()->composer(array('aunews.batch','aunews.invalid.invalidform'),function($view){
           $view->with('states',\App\Lookup::where('filter','states')->lists('name','name'));
        });
    }
    
    private function composeStatesAUPostCodeAdd(){
        view()->composer('admin.setup.aupostcode.add',function($view){
           $view->with('states',\App\Lookup::where('filter','states')->lists('name','name'));
        });
    }
    
    private function composeStatesAUPostCodeEdit(){
        view()->composer('admin.setup.aupostcode.edit',function($view){
           $view->with('states',\App\Lookup::where('filter','states')->lists('name','name'));
        });
    }
    
    private function composeStatesPubListAdd(){
        view()->composer('admin.setup.publication.add',function($view){
           $view->with('states',\App\Lookup::where('filter','states')->lists('name','name'));
        });
    }
    
    private function composeStatesPubListEdit(){
        view()->composer('admin.setup.publication.edit',function($view){
           $view->with('states',\App\Lookup::where('filter','states')->lists('name','name'));
        });
    }
    
}
