<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
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

        Blade::directive('throw', function ($message) {
            if(true){
                return "<?php throw new Exception($message); ?>";
            }
            return '';
        });
    }
}
