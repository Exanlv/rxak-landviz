<?php

namespace Rxak\Framework\Routing\Routes;

use Rxak\App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Rxak\App\Http\Controllers\Home\HomeController;
use Rxak\App\Http\Validators\Admin\CreateProjectValidator;
use Rxak\App\Http\Validators\Admin\ProjectValidator;
use Rxak\App\Http\Validators\LoginValidator;
use Rxak\Framework\Middleware\CsrfMiddleware;
use Rxak\Framework\Middleware\StartSessionMiddleware;
use Rxak\Framework\Routing\Route;
use Rxak\Framework\Routing\Router;

$router = Router::getInstance();

$loginRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class, CsrfMiddleware::class]],
    [
        Route::get('/^\/login$/', HomeController::class, 'login'),
        Route::post('/^\/login$/', HomeController::class, 'loginSubmit', ['validator' => LoginValidator::class]),
    ]
);

$adminRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class]],
    [
        Route::get('/^\/admin\/project$/', AdminProjectController::class, 'index', ['validator' => ProjectValidator::class]),
        Route::get('/^\/admin\/project\/new$/', AdminProjectController::class, 'create', ['validator' => ProjectValidator::class]),
        Route::post('/^\/admin\/project\/new$/', AdminProjectController::class, 'store', ['validator' => CreateProjectValidator::class]),
    ]
);

$router->registerRoutes(
    Route::get('/^\/$/', HomeController::class, 'home'),
    ...$loginRoutes,
    ...$adminRoutes,
);