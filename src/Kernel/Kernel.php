<?php

declare(strict_types=1);

use Vamoscolar\Vcphp\Router;
use Vamoscolar\Vcphp\Controllers\{
    HomeController,
    TodoController,
};
//use Vamoscolar\Vcphp\Controllers\;

use Vamoscolar\Vcphp\Config\Config;
use Vamoscolar\Vcphp\Config\Logger;

$LOG_PATH = Config::get('LOG_PATH');

Logger::enableSystemLogs();
$logger = Logger::getInstance();

$logger->info('App started');

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/show', HomeController::class, 'show');

$router->get('/todos/index', TodoController::class, 'index');

$router->dispatch();

$logger->info('App finished');
