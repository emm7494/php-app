<?php

declare(strict_types=1);

namespace App\Controllers;

use Templates\Utils\ViewMaker;

class BackController extends ViewMaker 
{
    public function index($method, $uri): void
    {
        $this->render('index', ['three' => 'index_here...']);
    }

    public function about(): void
    {
        $this->render('about', ['one']);
    }

    public function contact(): void
    {
        $this->render('contact', ['two']);
    }

    public function not_found(): void
    {
        $this->render('404', ['five']);
    }
}
