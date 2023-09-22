<?php

namespace App\Providers;

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
        // Register your application services here, if needed.
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register custom Blade components here.
        $this->registerBladeComponents();
    }

    /**
     * Register custom Blade components.
     *
     * @return void
     */
    protected function registerBladeComponents()
    {
        view()->composer('*', function ($view) {
            $view->with('components', [
                'x-permission' => \App\View\Components\CustomLayout::class,
                // Add more components as needed.
            ]);
        });
    }
}