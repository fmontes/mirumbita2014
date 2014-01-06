<?php zp_apply_filter("theme_body_open"); ?>

<div class="header-wrapper">
    <header class="header">
        <a href="#" class="btn toggle-menu js-toggle-menu">toggle</a>

        <a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext("Albums Index"); ?>" class="logo">
            <?php echo getGalleryTitle();?>
        </a>

        <nav class="nav header-nav" role="navigation">
            <?php include "main-nav.php"; ?>
        </nav>

        <?php if (getOption("Allow_search")) { ?>
            <div class="header-search">
            <?php printSearchForm("", "header-search", "", gettext("Search"), "", [title, desc], [], false); ?>
            </div>
        <?php } ?>
    </header>
</div><!-- // header-wrapper -->