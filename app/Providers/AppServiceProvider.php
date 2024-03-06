<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
        app('view')->composer('frontend.layouts.navigation', function ($view) {
            $this->viewData($view);
        });
        app('view')->composer('frontend.products', function ($view) {
            $this->viewData($view);
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

    public function viewData($view) {
        $banners = DB::table('banners')->select('banner_image')->where('status',1)->get();
        $categories = DB::table('categories')->select('id','name')->where('status',1)->get();
        $features = DB::table('products')->where('is_featured',1)->where('status',1)->take(3)->get();

        return $view->with(compact('banners', 'categories', 'features'));
    }
}
