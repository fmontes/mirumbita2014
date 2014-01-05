<?php include "includes/head_meta.php"; ?>

    <body class="home">
        <div class="outer-wrapper">

            <nav class="nav side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <div class="home-latest-albums">
                            <?php printLatestAlbums(getOption("latest_albums_number_home"), true, true, false, "", "200", "300", false, false); ?>
                        </div><!-- // home-latest-albums -->
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>

            </div><!-- // inner-wrapper -->
        </div><!-- // outer-wrapper -->
        <?php include "includes/scripts.php"; ?>
    </body>
</html>