<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
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
        $DS = DIRECTORY_SEPARATOR;
        config(['customers' => File::getRequire(__DIR__ . $DS . '..' . $DS . 'config' . $DS . 'route.php')]);
        $this->loadViewsFrom(__DIR__ . $DS . '..' . $DS . 'resources' . $DS . 'views', 'customers.views');
        $this->loadMigrationsFrom(__DIR__ . $DS . '..' . $DS . 'database' . $DS . 'migrations');
    }
}
