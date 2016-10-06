<?php

namespace Containment\Http;

use Illuminate\Foundation\Http\Kernel as BaseKernel;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;

class Kernel extends BaseKernel
{
    /**
     * @var array
     */
    protected $middleware = [
        CheckForMaintenanceMode::class,
    ];

    /**
     * @var array
     */
    protected $middlewareGroups = [
        "api" => [
            "bindings",
        ],
    ];

    /**
     * @var array
     */
    protected $routeMiddleware = [
        "bindings" => SubstituteBindings::class,
        "throttle" => ThrottleRequests::class,
    ];
}
