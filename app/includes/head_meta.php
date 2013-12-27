<?php zp_apply_filter('theme_head'); ?>
<?php printHeadTitle(); ?>
<meta http-equiv="content-type" content="text/html; charset=<?php echo LOCAL_CHARSET; ?>" />
<?php if (class_exists('RSS')) printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>
<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/css/main.css" type="text/css" />
<!-- @TODO find a way to remove this automatically for production -->
<script src="//localhost:35729/livereload.js"></script>