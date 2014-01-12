<?php include "includes/head_meta.php"; ?>

    <body class="home">
        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <div class="item-listing home-latest-albums">
                            <ul>
                                <?php
                                    // http://www.zenphoto.org/documentation/classes/ThemeObject.html
                                    $latestalbums = getAlbumStatistic(getOption("latest_albums_number_home"), "latest-date", "", "desc");
                                    foreach ($latestalbums as $latestalbum) {
                                        $album = newAlbum($latestalbum[folder]);
                                ?>
                                <li>
                                    <a href="<?php echo $album->getAlbumLink() ?>">
                                        <img src="<?php echo $album->getAlbumThumb(); ?>" alt="<?php echo $album->getTitle() ?>">
                                    </a>
                                    <h3>
                                        <a href="<?php echo $album->getAlbumLink() ?>">
                                            <?php echo $album->getTitle() ?>
                                        </a>
                                    </h3>

                                    <?php $date = date_create($album->getDateTime()); ?>

                                    <time datetime="<?php echo date_format($date, 'Y-m-d'); ?>"><?php echo date_format($date, 'd/m/y'); ?></time>

                                    <div class="fb-like" data-href="http://<?php echo getMainSiteURL() ?><?php echo $album->getAlbumLink() ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div><!-- // home-latest-albums -->
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>

            </div><!-- // inner-wrapper -->
        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>

</html>