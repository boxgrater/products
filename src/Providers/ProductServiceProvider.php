<?php

namespace BoxGrater\Products\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views/products/', 'products');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->mapRoutes();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('recipes', 'Bistro\Food\Recipes\Facades\RecipesFacade');
    }

    public function mapRoutes()
    {

    }

}
