<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Vite;
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
        // prevent n+1 query
        Model::preventLazyLoading(!$this->app->isProduction());

        Vite::macro('template', fn($asset) => $this->asset("resources/assets/template/{$asset}"));
    }
}
