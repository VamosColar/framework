<?php

declare(strict_types=1);

namespace Vamoscolar\Vcphp\Models;

class TodoModel
{
    public string $title;

    public string $description;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
    }
}