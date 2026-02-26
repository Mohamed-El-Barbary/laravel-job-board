<?php

use App\Http\Middleware\onlyMy;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias(['onlyMy' => onlyMy::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(using: function (AuthenticationException $e, Request $request) {
            if ($request->is(patterns: 'api/*')) {
                return response()->json(data: [
                    'message' => 'Unauthenticated.'
                ], status: 401);
            }
        });
    })->create();
