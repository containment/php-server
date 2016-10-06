<?php

namespace Containment\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $namespace = "Containment\\Http\\Controllers";

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        $properties = [
            "middleware" => "api",
            "namespace" => $this->namespace,
        ];

        /** @noinspection PhpIncludeInspection */
        $factory = require base_path("routes/api.php");

        /** @noinspection PhpUndefinedMethodInspection */
        Route::group($properties, $factory);
    }
}
