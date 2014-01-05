<?php zp_apply_filter("theme_body_open"); ?>

<div class="header-wrapper">
    <header class="header">
        <a href="#" class="btn toggle-menu js-toggle-menu">toggle</a>
        <div class="logo"><?php printHomeLink("", ""); ?></div>

        <?php if (getOption("Allow_search")) { ?>
            <div class="header-search">
                <?php printSearchForm("","search","",gettext("Search gallery")); ?>
            </div>
        <?php } ?>
    </header>
</div><!-- // header-wrapper -->