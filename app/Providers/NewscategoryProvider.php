<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class NewscategoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        view()->composer('*', function ($view){
            $mynewscat=Category::all();
            if($mynewscat){
                return $view->with("mynewscat",$mynewscat);
            }else{
                return $view->with("mynewscat",null);
            }
        });
    }
}
