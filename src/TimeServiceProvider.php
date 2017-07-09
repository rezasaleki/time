<?php

namespace RezaSaleki\Time;

use Illuminate\Support\ServiceProvider;
use rezasaleki\time\Facade\Timer;
use RezaSaleki\Time\Middlewares\CheckTime;

class TimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/Views', 'myView');
        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/MyView') ,
        ] , 'MyTag');

        $this->loadMigrationsFrom(__DIR__ . '/Migrations');


        // register middleware
        $router = $this->app['router'];
        dd($router);
        $router->middleware("checkTime" , CheckTime::class);

        $this->app->bind('MyTimer' , function (){
            return new Timer();
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/Config.php', 'myConfig'
        );
        $this->publishes([
            __DIR__.'/Config/Config.php' => config_path('MyConfig.php')
        ], 'config');
    }
}
