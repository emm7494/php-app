<?php
$title = 'Page Not Found!!!';
ob_start();
echo 'page not found!!!';
$content = ob_get_clean();
require dirname(__DIR__) . '/base.php';