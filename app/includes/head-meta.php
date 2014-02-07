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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">

        <link rel="icon" type="image/png" href="<?php echo $_zp_themeroot; ?>/images/favicon.png">
        <link rel="icon" type="image/gif" href="<?php echo $_zp_themeroot; ?>/images/favicon.gif">

        <!-- build:css(app) /css/main.css -->
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/pickadate/lib/themes/default.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/pickadate/lib/themes/default.date.css" type="text/css" />
        <link rel="stylesheet" href="bower_components/pickadate/lib/themes/default.time.css" type="text/css" />
        <!-- endbuild -->

        <script src="//localhost:35729/livereload.js"></script>

        <script src="<?php echo $_zp_themeroot; ?>/js/vendor/modernizr.custom.js"></script>

        <!--[if lt IE 9]>
        <!-- build:js(app) /js/respond.js -->
        <script src="bower_components/respond/src/respond.js"></script>
        <!-- endbuild -->
        <![endif]-->

        <?php zp_apply_filter('theme_head'); ?>

        <?php
            if ($_zp_gallery_page == 'index.php') {
                $fbtitle = getMainSiteName();
                $fbimage = $_zp_themeroot . '/images/fb-avatar.jpg';
                $fblink = "";
            }
            if ($_zp_gallery_page == 'album.php') {
                $fbtitle = getAlbumTitle();
                $fbimage = getAlbumThumb();
                $fblink = getAlbumLinkURL();
            }
            if ($_zp_gallery_page == 'image.php') {
                $fbtitle = getImageTitle();
                $fbimage = getImageThumb();
                $fblink = getImageLinkURL();
            }
            if ($_zp_gallery_page == 'pages.php') {
                $fbtitle = getPageTitle();
                $fbimage = $_zp_themeroot . '/images/fb-avatar.jpg';
                $fblink = getPageLinkURL();
            }
        ?>

        <meta property="og:site_name" content="<?php echo getMainSiteName(); ?>">
        <meta property="og:title" content="<?php echo $fbtitle; ?>">
        <meta property="og:description" content="Desde más de 7 años somos el portal de fiestas infantiles más completo de la regiön.">
        <meta property="og:image" content="<?php echo 'http://' . getMainSiteURL() .  $fbimage; ?>">
        <meta property="og:url" content="<?php echo 'http://' . getMainSiteURL() . $fblink ?>">
        <meta property="fb:app_id" content="242087732633401">
    </head>




