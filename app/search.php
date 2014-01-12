<?php include "includes/head_meta.php"; ?>

    <body class="search">
        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">

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
                            <h4 class="search results">
                                <?php printf(ngettext('We found %1$u result for <em>%2$s</em>','We found %1$u results for <em>%2$s</em>',$total), $total, html_encode($searchwords)); ?>
                            </h4>
                        <?php } ?>

                        <section class="item-listing">
                            <ul>
                                <?php
                                    while (next_album()): $c++;
                                        include "includes/album-item.php";
                                    endwhile;
                                ?>
                            </ul>
                        </section>

                        <div class="item-listing">
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
                                echo gettext("Sorry, no image matches found. Try refining your search.");
                            }
                        ?>
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