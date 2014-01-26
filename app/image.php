<?php include "includes/head-meta.php"; ?>

    <body class="image">
        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav off-canvas-nav js-off-canvas-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <nav class="nav side-nav js-side-nav" role="navigation">
                        <?php include "includes/main-nav.php"; ?>
                    </nav>

                    <div class="content" role="main">
                        <?php printParentBreadcrumb("", " | ", " | "); printAlbumBreadcrumb("", " | "); ?><?php printImageTitle(true); ?>

                        <a href="<?php echo getFullImageURL(); ?>" title="<?php echo getBareImageTitle();?>" class="main-image">
                            <img src="<?php echo getDefaultSizedImage(); ?>" alt="<?php echo getBareImageTitle();?>">
                        </a>

                        <?php if (hasPrevImage()) { ?>
                            <a href="<?php echo html_encode(getPrevImageURL());?>" title="<?php echo gettext("Previous Image"); ?>"><?php echo gettext("prev"); ?></a>
                        <?php } if (hasNextImage()) { ?>
                            <a href="<?php echo html_encode(getNextImageURL());?>" title="<?php echo gettext("Next Image"); ?>"><?php echo gettext("next"); ?></a>
                        <?php } ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>