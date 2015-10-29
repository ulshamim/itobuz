<?php

namespace Itobuz\Ulshamim;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'simpleAdmin');
        $this->publishes([
    __DIR__.'/views' => base_path('resources/views/itobuz/simpleAdmin'),
]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Itobuz\Ulshamim\SimpleAdminController');
    }
}
