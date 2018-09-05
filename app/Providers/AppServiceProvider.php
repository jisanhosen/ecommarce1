<?php

namespace App\Providers;
use View;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('FrontEnd.includes.menu', function ($view){
           $view->with('publishedCategories', $publishedCategories = Category::where('publication_status', 1)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
