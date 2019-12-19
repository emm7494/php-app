<?php
$title = 'Mini PHP - Home';
ob_start();
echo 'Welcome Home!!!';
echo getenv('mouse');
var_dump($data);
$content = ob_get_clean();
require dirname(__DIR__) . '/base.php';