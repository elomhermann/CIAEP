<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;

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
        // pour mettre les id à uuid par défaut
        Blueprint::macro('uuidPrimary', function ($name = 'id') {
        return $this->uuid($name)->primary();
    });
    }
}
