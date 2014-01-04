<?php
    // force UTF-8
    if (!defined("WEBPATH")) die();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <?php printHeadTitle(); ?>
        <meta charset="<?php echo LOCAL_CHARSET; ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="">
        <link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/css/main.css" type="text/css" />

        <?php zp_apply_filter('theme_head'); ?>

        <!-- @TODO find a way to remove this automatically for production -->
        <script src="//localhost:35729/livereload.js"></script>

        <script src="<?php echo $_zp_themeroot; ?>/js/vendor/modernizr.custom.js"></script>
    </head>