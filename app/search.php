<?php include "includes/head-meta.php"; ?>

    <body class="search">
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
                        <h1 class="page-title"><?php echo gettext_th("Search Results", "mirumbita") ?></h1>

                        <?php
                            $c = 0;
                            $numimages = getNumImages();
                            $numalbums = getNumAlbums();
                            $total = $numimages + $numalbums;
                            if ($total == 0) {
                                $_zp_current_search->clearSearchWords();
                            }

                            $searchwords = getSearchWords();
                            $searchdate = getSearchDate();
                            if (!empty($searchdate)) {
                                if (!empty($searchwords)) {
                                    $searchwords .= ": ";
                                }
                                $searchwords .= $searchdate;
                            }
                        ?>

                        <?php if ($total > 0 ) { ?>
                            <p class="search-results">
                                <?php //@TODO: translate this //printf(ngettext('We found <b>%1$u</b> albums for « <b>%2$s</b> »', 'We found <b>%1$u</b> images for « <b>%2$s</b> »', $total), $total, html_encode($searchwords)); ?>
                                <?php printf(ngettext('Encontramos <b>%1$u</b> albums con « <b>%2$s</b> »', 'Encontramos <b>%1$u</b> imagenes con « <b>%2$s</b> »', $total), $total, html_encode($searchwords)); ?>
                            </p>
                        <?php } ?>

                        <section class="item-listing album-listing">
                            <ul>
                                <?php
                                    while (next_album()): $c++;
                                        include "includes/album-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </section>

                        <div class="item-listing image-listing">
                            <ul>
                                <?php
                                    while (next_image()): $c++;
                                        include "includes/image-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </div>

                        <?php
                            if ($c == 0) {
                                echo gettext_th("<p class='no-results'>Sorry, no image matches found. Try refining your search.</p>", "mirumbita");
                            }
                        ?>
                        <?php printPageListWithNav(); ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->
        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>

</html>