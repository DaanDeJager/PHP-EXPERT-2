<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Reparatie;
use App\Models\Fietsen;
use App\Models\User;

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
        View::share('fietsen', Fietsen::OrderBy('id','desc')->get());
        View::share('users', User::OrderBy('created_at','desc')->get());
        View::share('reparaties', Reparatie::OrderBy('created_at','desc')->get());
    }
}
