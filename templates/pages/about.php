<?php
$title = 'About Us';
ob_start();
$content = ob_get_clean();
require dirname(__DIR__) . '/base.php';
