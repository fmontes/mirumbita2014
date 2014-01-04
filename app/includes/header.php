<?php zp_apply_filter("theme_body_open"); ?>

<div class="header-wrapper">
    <header class="header">
        <div class="logo"><?php printHomeLink("", ""); ?></div>
        <nav class="nav" role="navigation">
            <?php if(function_exists("printAlbumMenu")) { ?>
                <?php printAlbumMenuList("list-top", NULL, "main-nav", "active", "", "", $allalbums, false, false);
                ?>
            <?php } ?>
        </nav>

        <?php if (getOption("Allow_search")) { ?>
            <div class="header-search">
                <?php printSearchForm("","search","",gettext("Search gallery")); ?>
            </div>
        <?php } ?>
    </header>
</div><!-- // header-wrapper -->