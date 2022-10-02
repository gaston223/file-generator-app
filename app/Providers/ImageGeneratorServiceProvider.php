<?php

namespace App\Providers;

use App\Http\Services\UserFiles\ImageGeneratorService;
use Illuminate\Support\ServiceProvider;

class ImageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ImageGeneratorService::class, function ($app) {
            return new ImageGeneratorService($app->make());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
