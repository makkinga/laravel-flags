<?php

namespace Makkinga\Flags;

use App\Console\Commands\ModelMakeCommand;
use App\Helpers\ResponseCache\ResponseCache;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Facade::class, function () {
            return new Facade();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/flags.php' => config_path('flags.php')], 'config');
    }
}
