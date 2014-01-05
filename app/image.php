<?php include "includes/head_meta.php"; ?>

    <body class="image">
        <div class="outer-wrapper">

            <nav class="nav side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <?php printHomeLink("", " | "); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php echo gettext("Albums Index"); ?>"><?php echo getGalleryTitle();?></a> | <?php printParentBreadcrumb(); ?><?php printAlbumTitle();?>
                        <?php if (hasPrevImage()) { ?>
                            <a href="<?php echo html_encode(getPrevImageURL());?>" title="<?php echo gettext("Previous Image"); ?>"><?php echo gettext("prev"); ?></a>
                        <?php } if (hasNextImage()) { ?>
                            <a href="<?php echo html_encode(getNextImageURL());?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?></a>
                        <?php } ?>
                        <?php printHomeLink("", " | "); ?><a href="<?php echo html_encode(getGalleryIndexURL());?>" title="<?php gettext("Albums Index"); ?>"><?php echo getGalleryTitle();?></a> | <?php printParentBreadcrumb("", " | ", " | "); printAlbumBreadcrumb("", " | "); ?><?php printImageTitle(true); ?>
                        <a href="<?php echo html_encode($fullimage);?>" title="<?php echo getBareImageTitle();?>">
                            <?php printDefaultSizedImage(getImageTitle()); ?>
                        </a>
                        <?php printImageDesc(); ?>
                        <?php
                            if (getImageMetaData()) {
                                printImageMetadata("", false); ;
                            }
                        ?>
                        <?php printTags("links", gettext("<strong>Tags:</strong>")." ", "taglist", ""); ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>