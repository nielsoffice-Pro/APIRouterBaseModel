<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        $apiRoutes = ['MsapiExamTypeApi']; // You can expand this array later

        foreach ($apiRoutes as $file) {
            $path = base_path("routes/{$file}.php");

            if (file_exists($path)) {
                Route::middleware('api')
                    ->prefix('api') // optional if you want all API routes to be under /api/*
                    ->group($path);
            }
        }
    }

    protected function loadModelRoutes()
{
    // PAGE
    // $models = []; // ← Add AAPI here

    // foreach ($models as $model) {
    //     $routeFile = base_path("routes/{$model}.php");

    //     if (file_exists($routeFile)) {
    //         Route::middleware('web')
    //             ->group($routeFile);
    //     }
    // }

}


}
