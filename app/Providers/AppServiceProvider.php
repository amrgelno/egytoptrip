<?php

namespace App\Providers;
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
    $this -> app -> bind('path.app', function()
{
        return base_path('./app');
});


  
    
    }

    /**
     * Bootstrap any application services.
     *@use Livewire\Livewire;
     * @return void
     */
    public function boot()
    {

 if (app()->environment('production')) {
        URL::forceScheme('https');
    }
      
        
    }
}
