<?php zp_apply_filter("theme_body_open"); ?>

<div class="header-wrapper">
    <header class="header">
        <div class="header-inner">
            <a href="#" class="btn toggle-menu js-toggle-menu left">Toggle</a>
            <a href="#" class="btn search-toggle js-toggle-search right">Search</a>
            <a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext("Albums Index"); ?>" class="logo">
                <img src="<?php echo $_zp_themeroot; ?>/images/logo-mirumbita.svg" alt="<?php echo getGalleryTitle();?>">
            </a>
        </div>

        <nav class="nav header-nav js-header-nav" role="navigation">
            <?php include "main-nav.php"; ?>
        </nav>

        <?php if (getOption("Allow_search")) { ?>
            <div class="header-search js-header-search">
            <?php printSearchForm("", "header-search", "", gettext("Search"), "", [title, desc], [], false); ?>
            </div>
        <?php } ?>
    </header>
</div><!-- // header-wrapper -->