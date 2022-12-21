<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DirectiveServiceProvider extends ServiceProvider
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
        // component props validation directive

        /*
        Example:
        @propsValidation([
        empty($name) => 'Name is required',
        !is_bool($isActive) => 'Is active should be a boolean.',
        ])
         */
        Blade::directive('propsValidation', function ($expression) {
            return '
                    <?php
                        foreach( ' . $expression . ' as $isTrue => $message){
                            if($isTrue){
                                throw new Exception($message);
                            }
                        };
                    ?>
                ';
        });
    }
}
