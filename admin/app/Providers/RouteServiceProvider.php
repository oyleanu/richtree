<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        Route::get('/', 'App\\Http\\Controllers\\AdminController@index');
        foreach (glob(web_path('routes') . '/*.php') as $file) {
            $route_file = basename($file, '.php');
            $this->mapRoutes($route_file);
        }
    }
    protected function mapRoutes($route_file)
    {
        Route::prefix($route_file)
             ->middleware($route_file)
             ->namespace($this->namespace)
             ->group(web_path('routes/'.$route_file.'.php'));
    }
}
