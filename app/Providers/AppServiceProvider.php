<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $age = Carbon::create('1929', '2', '4')->age;

        view::share('age', $age);
        View::share('myname', 'Renato');
        //view::share('auth', Auth::user());

        view::composer('*', function($view){
            $view->with('auth', Auth::user());
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
