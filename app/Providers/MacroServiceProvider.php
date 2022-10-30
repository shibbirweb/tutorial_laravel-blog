<?php

namespace App\Providers;

use App\Helpers\UniqueSlugGenerator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // unique slug macro
        Str::macro('uniqueSlug', function (string $model, string $value, string $column = 'slug', ?string $except = null, ?string $exceptColumnName = 'id') {
            return UniqueSlugGenerator::builder($model, $value, $column, $except, $exceptColumnName)
                ->generate();
        });
    }
}
