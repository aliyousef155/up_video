<?php

namespace App\Providers;

use App\models\Category;
use App\models\Page;
use App\models\Skill;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('Categories',Category::get());
        view()->share('Skills',Skill::get());
        view()->share('Pages',Page::get());
    }
}
