<?php
$title = 'Contact Us';
ob_start();
echo 'Just call us...';
var_dump($data);
$content = ob_get_clean();
require dirname(__DIR__) . '/base.php';
