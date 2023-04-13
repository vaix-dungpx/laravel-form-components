<?php
namespace TysonLaravel\FormComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TysonLaravel\FormComponents\Alert;

class FormComponentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/form-components.php', 'form-components');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/form-components.php' => config_path('form-components.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/form-components'),
            ], 'views');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'form-components');

        Blade::componentNamespace('TysonLaravel\\FormComponents\\Forms', 'form');

        Blade::component('alert', Alert::class);
    }
}
