<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * @var array{web: class-string<\App\Http\Middleware\LocaleMiddleware>[]} $middlewareGroups
     */
    protected array $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\SetLocale::class,

        ],
    ];
}
