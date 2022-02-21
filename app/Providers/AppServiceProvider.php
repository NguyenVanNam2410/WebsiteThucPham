<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\category_news;
use App\Models\Menu;
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
        Paginator::useBootstrap();

        view()->composer('frontend/admin/header',function($view){
            $post_categories = category_news::orderBy('id','desc')->get();
            $view->with('post_categories',$post_categories);
        });
        view()->composer('frontend/admin/header',function($view){
            $menus = Menu::where('parent_id',0)->get();
            $view->with('menus',$menus);
        });
    }
}
