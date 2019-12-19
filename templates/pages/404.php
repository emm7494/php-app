<?php
$title = 'Page Not Found!!!';
ob_start();
echo 'page not found!!!';
var_dump($data);
$content = ob_get_clean();
require dirname(__DIR__) . '/base.php';