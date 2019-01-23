<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CBGV;
use App\Http\Controllers\MyController;

class CBGVServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('control', function () {
            $gv = new CBGV();
            $control  = new MyController($gv);
            return $control;
        });
    }
}
