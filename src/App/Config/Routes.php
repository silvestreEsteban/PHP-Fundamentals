<?php

declare(strict_types=1);

namespace App\Config;
use Framework\App;
use App\Controllers\{AboutController, HomeController, AuthController};

~≠
function registerRoutes(App $app)
{
    $app->get('/about', [AboutController::class, 'about']);
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/register', [AuthController::class, 'register']);

}