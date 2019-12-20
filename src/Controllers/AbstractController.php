<?php

declare(strict_types=1);

namespace App\Controllers;

class AbstractController
{
    public function __construct()
    { }

    public function __destruct()
    { }

    public function write_json(array $array)
    {
        echo json_encode($array);
    }

    public function read_json()
    { }
}
