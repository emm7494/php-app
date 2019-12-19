<?php

declare(strict_types=1);

use App\Controllers\BackController;

require_once dirname(__DIR__) . '/config/bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$response = new BackController;

if (in_array($uri, array('/', '/index', '/home'))) {
    $response->index($method, $uri);
} elseif ($uri === '/about') {
    $response->about();
} elseif ($uri === '/contact') {
    $response->contact();
 } else {
     $response->not_found();
 }
