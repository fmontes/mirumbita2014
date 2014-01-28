<?php include "includes/head-meta.php"; ?>

    <body class="home">
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
                        <section class="item-listing home-latest-albums js-home-latest-albums">
                            <ul>
                                <?php
                                    // http://www.zenphoto.org/documentation/classes/ThemeObject.html
                                    $latestalbums = getAlbumStatistic(getOption("latest_albums_number_home"), "latest-date", "", "desc");
                                    foreach ($latestalbums as $latestalbum) {
                                        $album = newAlbum($latestalbum[folder]);
                                ?>
                                <li class="js-album-item">
                                    <article>
                                        <a href="<?php echo $album->getAlbumLink() ?>" class="album-thumb">
                                            <img src="<?php echo $album->getAlbumThumb(); ?>" alt="<?php echo $album->getTitle() ?>">
                                        </a>
                                        <div class="album-info">
                                            <h3 class="album-title">
                                                <a href="<?php echo $album->getAlbumLink() ?>">
                                                    <?php echo $album->getTitle() ?>
                                                </a>
                                            </h3>
                                            <div class="album-meta">
                                                <?php $date = date_create($album->getDateTime()); ?>
                                                <time datetime="<?php echo date_format($date, 'Y-m-d'); ?>" class="album-date"><?php echo date_format($date, 'd/m/y'); ?></time>
                                                <span class="album-image-number"><?php echo $album->getNumImages() . " " . gettext("photos") ?></span>
                                            </div>
                                            <div class="album-social">
                                                <div class="fb-like" data-href="http://<?php echo getMainSiteURL() ?><?php echo $album->getAlbumLink() ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                                <a href="<?php echo $album->getAlbumLink() ?>#album-comments" class="album-comments-icons">
                                                    <fb:comments-count href="http://<?php echo getMainSiteURL() ?><?php echo $album->getAlbumLink() ?>"></fb:comments-count>
                                                </a>
                                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?php echo getMainSiteURL() ?><?php echo $album->getAlbumLink() ?>" data-text="Que lindas las fotos de <?php echo $album->getTitle() ?>" data-via="mirumbita" data-lang="es">Twittear</a>
                                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                <?php } ?>
                            </ul>
                        </section><!-- // home-latest-albums -->

                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>

            </div><!-- // inner-wrapper -->
        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>

</html>