<?php include "includes/head_meta.php"; ?>

    <body class="album">
        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <h1 class="page-title"><?php printAlbumTitle();?></h1>
                        <!-- <p><?php printAlbumDesc(); ?></p> -->

                        <section class="item-listing album-listing">
                            <ul>
                                <?php
                                    while (next_album()):
                                        include "includes/album-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </section>

                        <div class="item-listing image-listing">
                            <ul>
                                <?php
                                    while (next_image()):
                                        include "includes/image-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </div>

                        <?php printPageListWithNav("« ".gettext("prev"), gettext("next")." »"); ?>

                    <div class="album-comments">
                            <div class="fb-comments" data-href="http://<?php echo getMainSiteURL() ?><?php echo getAlbumLinkURL() ?>" data-width="600px" data-numposts="5" data-colorscheme="light"></div>
                        </div>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>