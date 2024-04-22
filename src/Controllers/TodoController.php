<?php

declare(strict_types=1);

namespace Vamoscolar\Vcphp\Controllers;

use Vamoscolar\Vcphp\Models\TodoModel;

class TodoController extends Controller
{
    public function index()
    {
        $todos = [
            new TodoModel(title: 'Learn PHP', description: 'Learn PHP from scratch'),
            new TodoModel(title: 'Learn Laravel', description: 'Learn Laravel from scratch'),
            new TodoModel(title: 'Learn Vue.js', description: 'Learn Vue.js from scratch'),
        ];

        return $this->view('todos/index', ['todos' => $todos]);
    }
}
