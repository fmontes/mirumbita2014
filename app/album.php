<?php include "includes/head_meta.php"; ?>

    <body class="album">
        <div class="outer-wrapper">

            <nav class="nav side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext("Albums Index"); ?>"><?php echo getGalleryTitle();?></a>
                        <?php printParentBreadcrumb(); ?>
                        <?php printAlbumTitle();?>
                        <?php printAlbumDesc(); ?>

                        <?php while (next_album()): ?>
                            <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumThumbImage(getAnnotatedAlbumTitle()); ?></a>
                            <a href="<?php echo html_encode(getAlbumLinkURL());?>" title="<?php echo gettext("View album:"); ?> <?php echo getAnnotatedAlbumTitle();?>"><?php printAlbumTitle(); ?></a>
                            <?php printAlbumDate(""); ?>
                            <?php printAlbumDesc(); ?>
                        <?php endwhile; ?>

                        <?php while (next_image()): ?>
                            <a href="<?php echo html_encode(getImageLinkURL());?>" title="<?php echo getBareImageTitle();?>"><?php printImageThumb(getAnnotatedImageTitle()); ?></a>
                            </div>
                        <?php endwhile; ?>
                        <?php printPageListWithNav("« ".gettext("prev"), gettext("next")." »"); ?>
                        <?php printTags("links", gettext("<strong>Tags:</strong>")." ", "taglist", ""); ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>