<?php $title = 'Mini PHP - Home'; ?>
<?php ob_start(); ?>
<div>
    main content
</div>
<div class='square-box'>
    <div class='square-content'>
        <h3>test</h3>
    </div>
</div>
<style>
    .square-box {
        display: none;
        position: relative;
        width: 61.80%;
        overflow: hidden;
        background: #4679BD;
    }

    .square-box:before {
        content: "";
        display: block;
        padding-top: 161.80%;
    }

    .square-content {
        position: absolute;
        top: 50%;
        left: 50%;
        /* bottom: 0;
        right: 0; */
        color: #4679BD;
        transform: translate3d(-50%, -50%, 0);
        background-color: lavender
            /* text-align: center; */
    }
</style>
<?php $main_content = ob_get_clean(); ?>
<?php require dirname(__DIR__) . '/base.php'; ?>