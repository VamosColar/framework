<?php

declare(strict_types=1);

namespace Vamoscolar\Vcphp\Controllers;

class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);
        require __DIR__ . "/../Views/{$view}.php";
    }
}