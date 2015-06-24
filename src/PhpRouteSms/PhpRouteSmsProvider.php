<?php namespace Jestillore\PhpRouteSms;

use Illuminate\Support\ServiceProvider;

/**
 * A Laravel 5's package template.
 *
 * @author: Rémi Collin 
 */
class PhpRouteSmsProvider extends ServiceProvider {

    /**
     * This will be used to register config & view in 
     * your package namespace.
     */
    protected $packageName = 'php-route-sms';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes.php';

        // Register Views from your package
        $this->loadViewsFrom(__DIR__.'/../views', $this->packageName);

        // Register your asset's publisher
        $this->publishes([
            __DIR__.'/../assets' => public_path('vendor/'.$this->packageName),
        ], 'public');

        // Register your migration's publisher
        $this->publishes([
            __DIR__.'/../database/migrations/' => base_path('/database/migrations')
        ], 'migrations');
        
        // Publish your seed's publisher
        $this->publishes([
            __DIR__.'/../database/seeds/' => base_path('/database/seeds')
        ], 'seeds');

        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path($this->packageName.'.php'),
        ]);

        //
    }

}
