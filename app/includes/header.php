<?php zp_apply_filter('theme_body_open'); ?>

<header>
    <h1><?php printHomeLink('', ''); ?></h1>
    <nav>
        <?php if(function_exists('printAlbumMenu')) { ?>
            <?php printAlbumMenu('list-top', NULL, 'main-nav', 'active', '', '', $allalbums, false, false);
            ?>
        <?php } ?>
    </nav>

    <?php
        if (getOption('Allow_search')) {
            printSearchForm("","search","",gettext("Search gallery"));
        }
    ?>
</header>