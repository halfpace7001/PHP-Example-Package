<?php

namespace Its\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Its\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__ . '/views', 'Calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . '/routes/api.php';
    }
}
