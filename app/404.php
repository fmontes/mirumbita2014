<?php include "includes/head-meta.php"; ?>

    <body class="page page-404">
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
                        <h1 class="page-title"><?php echo gettext_th("Party is not here", "mirumbita"); ?></h1>
                        <p><?php echo gettext_th("Error 404: Page not found", "mirumbita"); ?></p>
                        <h4>Puedes realizar una busqueda:</h4>
                        <div class="search">
                            <?php printSearchForm("", "header-search", "", gettext("Search"), "", [title, desc], [], false); ?>
                        </div>
                        <h4>Categorías</h4>
                        <ul class="categories">
                            <li><a href="/index.php?album=Baby-Showers" title="Baby Showers">Baby Showers</a></li>
                            <li><a href="/index.php?album=Bautizos" title="Bautizos">Bautizos</a></li>
                            <li><a href="/index.php?album=Comuniones" title="Comuniones">Comuniones</a></li>
                            <li><a href="/index.php?album=Cumpleanos" title="Cumpleaños">Cumpleaños</a></li>
                            <li><a href="/index.php?album=Escolares" title="Escolares">Escolares</a></li>
                            <li><a href="/index.php?album=Especiales" title="Especiales">Especiales</a></li>
                            <li><a href="/index.php?album=Nacimientos" title="Nacimientos">Nacimientos</a></li>
                        </ul>

                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>