<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->topMenu();
    }

    public function topMenu(){
        View::composer('layouts.top-menu',function ($view){
            $view->with('menus',\App\Models\Menu::all());
        });
    }
}
