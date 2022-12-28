<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class ViteServiceProvider extends ServiceProvider
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
        // macro
        Vite::macro('template', fn($asset) => $this->asset("resources/assets/template/{$asset}"));

        // conditional add attribute in assets
        Vite::useScriptTagAttributes(function (string $src, string $url, array | null $chunk, array | null $manifest) {

            // for sweet alert 2
            if ($src === 'resources/assets/template/plugins/sweetalert2/sweetalert2.all.min.js') {

                return [
                    'type' => ($chunk == null && $manifest == null) // if development server is running
                    ?
                    ''
                    :
                    'module',
                ];
            }

            // for bootstrap switch
            if ($src === 'resources/assets/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js') {

                return [
                    'type' => ($chunk == null && $manifest == null) // if development server is running
                    ?
                    ''
                    :
                    'module',
                    'defer' => true,
                ];
            }

            return [];
        });
    }
}
