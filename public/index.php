<?php

declare(strict_types=1);

use App\Controllers\{
    HTMLController,
    JSONController
};
//use App\Controllers\JSONController;

require_once dirname(__DIR__) . '/config/bootstrap.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

if ($uri !== '/api') {
    $html_response = new HTMLController;

    if (in_array($uri, array('/', '/index', '/home'))) {
        $html_response->index();
    } elseif ($uri === '/about') {
        $html_response->about();
    } elseif ($uri === '/contact') {
        $html_response->contact();
    } else {
        $html_response->not_found();
    }
} else {
    $json_response = new JSONController;
    if ($uri === '/api') {
        $json_response->user($id = 21);
    } elseif ($uri === '/api') {
        //
    }
}
