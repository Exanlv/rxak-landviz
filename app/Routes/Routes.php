<?php

namespace Rxak\Framework\Routing\Routes;

use Rxak\App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Rxak\App\Http\Controllers\Home\HomeController;
use Rxak\App\Http\Validators\LoginValidator;
use Rxak\Framework\Middleware\CsrfMiddleware;
use Rxak\Framework\Middleware\StartSessionMiddleware;
use Rxak\Framework\Routing\Route;
use Rxak\Framework\Routing\Router;

$router = Router::getInstance();

$homeRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class, CsrfMiddleware::class]],
    [
        Route::get('/^\/$/', HomeController::class, 'home'),
        Route::get('/^\/login$/', HomeController::class, 'login'),
        Route::post('/^\/login$/', HomeController::class, 'loginSubmit', ['validator' => LoginValidator::class]),
    ]
);

$adminRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class]],
    [
        Route::get('/^\/admin\/project$/', AdminProjectController::class, 'index'),
        Route::get('/^\/admin\/project\/new$/', AdminProjectController::class, 'create'),
    ]
);

$router->registerRoutes(
    ...$homeRoutes,
    ...$adminRoutes,
);