<?php

declare(strict_types=1);

namespace Vamoscolar\Vcphp\Controllers;

use Vamoscolar\Vcphp\Config\Logger;

class HomeController extends Controller
{
    public function index(): void
    {
        $logger = Logger::getInstance();

        $data = [
            'title' => 'Home Page',
            'content' => 'Welcome to the home page'
        ];

        $logger->info('Home page accessed', $data);
        $this->view('home', $data);
    }

    public function show(): void
    {
        echo 'Show method';
        return;
    }
}
