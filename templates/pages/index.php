<?php $title = 'Mini PHP - Home'; ?>
<?php ob_start(); ?>
side
<?php $main_content = ob_get_clean(); ?>
<?php require dirname(__DIR__) . '/base.php'; ?>