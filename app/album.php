<?php include "includes/head_meta.php"; ?>

    <?php $isSubalbum = count(getParentAlbums()) ?>
    <?php if ($isSubalbum) { ?>
        <body class="subalbum">
    <?php } else { ?>
        <body class="album">
    <?php } ?>

        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">

                        <div class="album-intro">
                            <h1 class="page-title"><?php printAlbumTitle();?></h1>
                            <?php printAlbumDesc(); ?>
                        </div>

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

                        <?php printPageListWithNav("", ""); ?>

                        <?php if ($isSubalbum) { ?>
                            <div class="album-comments">
                                <div class="fb-comments" data-href="http://<?php echo getMainSiteURL() ?><?php echo getAlbumLinkURL() ?>" data-width="600px" data-numposts="5" data-colorscheme="light"></div>
                            </div>
                        <?php } ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>