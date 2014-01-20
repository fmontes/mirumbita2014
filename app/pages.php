<?php include "includes/head-meta.php"; ?>

    <body class="page">
        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <h1 class="page-title"><?php printPageTitle(); ?></h1>
                        <?php 
                            printPageContent();
                            printCodeblock(1);
                        ?>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>