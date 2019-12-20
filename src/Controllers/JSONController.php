<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\AbstractController;

class JSONController extends AbstractController
{
    public function user(int $id = 55): void
    {
        header('Content-type: application/json');
        $this->write_json([
            "id" => $id,
            "age" => 99
        ]);
    }

    public function about(): void
    { }

    public function contact(): void
    { }

    public function not_found(): void
    { }
}
