<?php

namespace App\Http;


use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\Localization;

class Kernel extends HttpKernel
{
  protected $middlewareGroups = [
        'web' => [

            \App\Http\Middleware\Localization::class,

        ],
    ];

    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\Admin::class,
    ];
}
