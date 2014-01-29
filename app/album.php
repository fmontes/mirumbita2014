<?php include "includes/head-meta.php"; ?>

    <?php $isSubalbum = count(getParentAlbums()) ?>
    <?php if ($isSubalbum) { ?>
        <body class="subalbum js-subalbum">
    <?php } else { ?>
        <body class="album js-album">
    <?php } ?>

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
                            <?php printAlbumDesc(); ?>

                            <?php if ($isSubalbum) { ?>
                                <div class="album-social">
                                    <div class="fb-like" data-href="http://<?php echo getMainSiteURL() ?><?php getAlbumLinkURL(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                    <a href="#album-comments" class="album-comments-icons">
                                        <fb:comments-count href="http://<?php echo getMainSiteURL() ?><?php echo getAlbumLinkURL() ?>"></fb:comments-count>
                                    </a>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?php echo getMainSiteURL() ?><?php getAlbumLinkURL(); ?>" data-text="Que lindas las fotos de <?php echo getAlbumTitle(); ?>" data-via="mirumbita" data-lang="es">Twittear</a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                </div>
                            <?php } ?>
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

                        <div class="item-listing image-listing js-image-listing">
                            <ul>
                                <?php
                                    while (next_image()):
                                        include "includes/image-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </div>

                        <?php printPageListWithNav(); ?>

                        <?php if ($isSubalbum) { ?>
                            <div id="album-comments" class="album-comments">
                                <h3 class="album-comments-title"><?php echo gettext_th("Like the pics? Leave a comment and share it with your family", "mirumbita"); ?></h3>
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