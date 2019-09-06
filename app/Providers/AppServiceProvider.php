<?php

namespace App\Providers;

use App\Services\UrlShortener\DriverFactory;
use App\Services\UrlShortener\UrlShortener;
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
        $this->app->bind(UrlShortener::class, function () {
            $driver = DriverFactory::make();

            return new UrlShortener($driver);
        });

        $this->app->alias(UrlShortener::class, 'urlshortener');
    }
}
