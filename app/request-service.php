<?php include "includes/head_meta.php"; ?>

    <body class="page request-service-page">
        <?php include "includes/fb-scripts.php"; ?>

        <div class="outer-wrapper">

            <nav class="nav side-nav js-side-nav" role="navigation">
                <?php include "includes/main-nav.php"; ?>
            </nav>

            <div class="inner-wrapper">

                <?php include "includes/header.php"; ?>

                <div class="content-wrapper">
                    <div class="content" role="main">
                        <h1 class="page-title"><?php echo gettext("Request Service"); ?></h1>
                        <form action="" class="form request-service">
                            <div class="form-group">
                                <label for="name"><?php echo gettext("Name"); ?></label>
                                <input type="text" id="name" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label for="kidname"><?php echo gettext("Kid Name"); ?></label>
                                <input type="text" id="kidname" tabindex="1">
                            </div>
                            <div class="form-group">
                                <label for="mobile"><?php echo gettext("Mobile"); ?></label>
                                <input type="tel" id="mobile" tabindex="2">
                            </div>
                            <div class="form-group">
                                <label for="email"><?php echo gettext("Email"); ?></label>
                                <input type="email" id="email" tabindex="3">
                            </div>
                            <div class="form-group">
                                <label for="date"><?php echo gettext("Event Date"); ?></label>
                                <input type="text" id="date" tabindex="4">
                            </div>
                            <div class="form-group">
                                <label for="city"><?php echo gettext("City"); ?></label>
                                <select name="city" id="city" tabindex="4">
                                    <option value="Maracaibo" selected="selected">Maracaibo</option>
                                    <option value="Ciudad Ojeda">Ciudad Ojeda</option>
                                    <option value="Tia Juana">Tia Juana</option>
                                    <option value="Cabimas">Cabimas</option>
                                    <option value="Santa Rita">Santa Rita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="room"><?php echo gettext("Party Room"); ?></label>
                                <select name="room" id="room" tabindex="5">
                                    <option value="" selected="selected"></option>
                                    <option value="Aquamania">Aquamania</option>
                                    <option value="Arturos Calle 72">Arturos Calle 72</option>
                                    <option value="Burguer King Delicias">Burguer King Delicias</option>
                                    <option value="Burguer King Plaza Republica">Burguer King Plaza Republica</option>
                                    <option value="Carting">Carting</option>
                                    <option value="Casa De Profesores (Apuz)">Casa De Profesores (Apuz)</option>
                                    <option value="Casa De Profesores">Casa De Profesores</option>
                                    <option value="Casita De Chcolate">Casita De Chcolate</option>
                                    <option value="Castillo Magico">Castillo Magico</option>
                                    <option value="Chicomania">Chicomania</option>
                                    <option value="Club Bella Vista">Club Bella Vista</option>
                                    <option value="Club Bella Vista">Club Bella Vista</option>
                                    <option value="Club Comercio">Club Comercio</option>
                                    <option value="Club Creole">Club Creole</option>
                                    <option value="Club Creole">Club Creole</option>
                                    <option value="Club De Educadores">Club De Educadores</option>
                                    <option value="Club De Educadores">Club De Educadores</option>
                                    <option value="Club Fiesta">Club Fiesta</option>
                                    <option value="Club Nautico">Club Nautico</option>
                                    <option value="Club Nautico">Club Nautico</option>
                                    <option value="Colegio De Abogados">Colegio De Abogados</option>
                                    <option value="Colegio De Bionalistas">Colegio De Bionalistas</option>
                                    <option value="Colegio De Contadores">Colegio De Contadores</option>
                                    <option value="Colegio De Economistas">Colegio De Economistas</option>
                                    <option value="Colegio De Ingenieros">Colegio De Ingenieros</option>
                                    <option value="Colegio De Medicos">Colegio De Medicos</option>
                                    <option value="Colegio De Veterinarios">Colegio De Veterinarios</option>
                                    <option value="Fantasy Kid'S">Fantasy Kid'S</option>
                                    <option value="Fiesta Aventura">Fiesta Aventura</option>
                                    <option value="Fiesta Mania">Fiesta Mania</option>
                                    <option value="Garotos">Garotos</option>
                                    <option value="Gran Salon">Gran Salon</option>
                                    <option value="Happy Day">Happy Day</option>
                                    <option value="Kids Place">Kids Place</option>
                                    <option value="Kids Play">Kids Play</option>
                                    <option value="La Guadalupana">La Guadalupana</option>
                                    <option value="Los Tulipanes">Los Tulipanes</option>
                                    <option value="Maggie'S Fun">Maggie'S Fun</option>
                                    <option value="Magic Party">Magic Party</option>
                                    <option value="Maracaibo Extremo">Maracaibo Extremo</option>
                                    <option value="Mc Donalds 5 De Julio">Mc Donalds 5 De Julio</option>
                                    <option value="Mc Donalds Bella Vista">Mc Donalds Bella Vista</option>
                                    <option value="Mc Donalds Cumbres">Mc Donalds Cumbres</option>
                                    <option value="Mc Donalds San Francisco">Mc Donalds San Francisco</option>
                                    <option value="Mc Donalds Delicias">Mc. Donalds Delicias</option>
                                    <option value="Mega Play">Mega Play</option>
                                    <option value="Mundo De Fiestas">Mundo De Fiestas</option>
                                    <option value="Mundo Divertido">Mundo Divertido</option>
                                    <option value="Mundo Magico">Mundo Magico</option>
                                    <option value="Pizza Hut Delicias">Pizza Hut Delicias</option>
                                    <option value="Pizza Hut Sambil">Pizza Hut Sambil</option>
                                    <option value="Postre Gourmet">Postre Gourmet</option>
                                    <option value="Recepciones El Guacamayo">Recepciones El Guacamayo</option>
                                    <option value="Rumbita Kids">Rumbita Kids</option>
                                    <option value="Superfiesta 1">Superfiesta 1</option>
                                    <option value="Superfiesta 2">Superfiesta 2</option>
                                    <option value="Superplay">Superplay</option>
                                    <option value="Victoria Party">Victoria Party</option>
                                    <option value="Otra direccion">-- Otra dirección --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address"><?php echo gettext("Other Address"); ?></label>
                                <textarea name="address" id="address" cols="30" rows="10" tabindex="6"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit"><?php echo gettext("Submit"); ?></button>
                            </div>
                        </form>
                    </div><!-- // content -->
                </div><!-- // content-wrapper -->

                <?php include "includes/footer.php"; ?>
            </div><!-- // inner-wrapper -->

        </div><!-- // outer-wrapper -->

        <?php include "includes/scripts.php"; ?>
    </body>
</html>