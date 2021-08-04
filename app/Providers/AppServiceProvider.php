<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TorMorten\Eventy\Facades\Eventy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Eventy::addAction('my.hook', function($data) {
//            $data->name = 'Test';
//            $data->save();
        });
    }
}
