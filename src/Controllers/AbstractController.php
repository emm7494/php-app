<?php

declare(strict_types=1);

namespace App\Controllers;

class AbstractController
{
    public function __construct()
    {
        print_r('Cool...');
    }

    public function __destruct()
    {
        print_r('Not Cool...');
    }

    public function render()
    {
        print_r('Rendering...');
    }
}
