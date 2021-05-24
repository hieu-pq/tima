<?php

namespace App\Providers;

use App\Models\NganSach;
use Illuminate\Support\Facades\View;
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
        View::share('NGANSACH', NganSach::where('nam', date('Y').'')->orderBy('created_at', 'desc')->first());
    }
}
