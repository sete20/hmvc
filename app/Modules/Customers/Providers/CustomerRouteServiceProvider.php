<?php

namespace Customers\Providers;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class CustomerRouteServiceProvider extends ServiceProvider
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
    // public function boot()
    // {
    //     // dd("hh");
    //     $this->configureRateLimiting();

    //     $this->routes(function () {
    //         //  Customer Module Routes For Web App
    //         Route::middleware('web')
    //             ->prefix('customers')
    //             ->namespace('App/Modules/Customers/Http/Controllers')
    //             ->group(base_path('App/Modules/Customers/Routes/web.php'));
    //     });
    // }
    // protected function configureRateLimiting()
    // {
    //     RateLimiter::for('api', function (Request $request) {
    //         return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
    //     });
    // }
}
