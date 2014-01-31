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

                        <div class="album-intro">
                            <h1 class="page-title"><?php printAlbumTitle();?></h1>
                        </div>

                        <a href="<?php echo getFullImageURL(); ?>" title="<?php echo getBareImageTitle();?>" class="main-image">
                            <img src="<?php echo getDefaultSizedImage(); ?>" alt="<?php echo getBareImageTitle();?>">
                        </a>

                        <div class="pagelist">
                            <ul class="pagelist">
                                <li class="prev">
                                    <?php if (hasPrevImage()) { ?>
                                        <a href="<?php echo html_encode(getPrevImageURL());?>" title="<?php echo gettext("Previous Image"); ?>"></a>
                                    <?php } else { ?>
                                        <span class="disabledlink"></span>
                                    <?php } ?>
                                </li>
                                <li class="next">
                                    <?php if (hasNextImage()) { ?>
                                        <a href="<?php echo html_encode(getNextImageURL());?>" title="<?php echo gettext("Next Image"); ?>"></a>
                                    <?php } else { ?>
                                    <span class="disabledlink"></span>
                                <?php } ?>
                                </li>
                            </ul>
                        </div>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>