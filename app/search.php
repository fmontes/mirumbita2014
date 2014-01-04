<?php include "includes/head_meta.php"; ?>

    <body class="search">
        <div class="page-wrapper">

            <?php include "includes/header.php"; ?>

            <div class="content-wrapper">
                <div class="content" role="main">
                    <?php
                        $total = getNumImages() + getNumAlbums();
                        if (!$total) {
                            $_zp_current_search->clearSearchWords();
                        }
                    ?>
                    <?php printHomeLink("", " | "); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo ("Gallery Index"); ?>"><?php echo getGalleryTitle();?></a> | <?php echo gettext("Search");?>
                    <?php printSearchForm("","search","",gettext("Search gallery")); ?>
                    <?php
                        if (($total = getNumImages() + getNumAlbums()) > 0) {
                            if (isset($_REQUEST["date"])){
                                $searchwords = getSearchDate();
                            } else { $searchwords = getSearchWords(); }
                                echo sprintf(gettext("Total matches for <em>%1$s</em>: %2$u"), html_encode($searchwords), $total);
                        }
                        $c = 0;
                    ?>
                    <?php while (next_album()): $c++;?>
                        <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a>
                        <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a>
                        <?php printAlbumDate(""); ?>
                        <?php printAlbumDesc(); ?>
                    <?php endwhile; ?>
                    <?php while (next_image()): $c++;?>
                        <a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>"><?php printImageThumb(getAnnotatedImageTitle()); ?></a>
                        </div>
                    <?php endwhile; ?>
                    <?php
                        if ($c == 0) {
                            echo gettext("Sorry, no image matches found. Try refining your search.");
                        }
                    ?>
                    <?php printPageListWithNav("« ".gettext("prev"), gettext("next")." »"); ?>
                    <?php printTags("links", gettext("<strong>Tags:</strong>")." ", "taglist", ""); ?>
                </div><!-- // content -->
            </div><!-- // content-wrapper -->

            <?php include "includes/footer.php"; ?>

        </div><!-- // page-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>

</html>