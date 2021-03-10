<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Auth;
use App\Models\settings;
use DB;

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
        Schema::defaultStringLength(191);
        view()->composer('admin.layouts', function($view) {
    
            $settings = settings::find(1);

            $view->with(compact('settings'));
        });
        view()->composer('user.layouts', function($view) {
    
            $settings = settings::find(1);

            $view->with(compact('settings'));
        });
    }
}
