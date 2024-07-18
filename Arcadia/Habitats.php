<!DOCTYPE html>
< lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./CSS/habitats.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/9c87998ff2.js" crossorigin="anonymous"></script>
        <title>Arcadia</title>
    </head>

    <body>

        <!-- Navbar -->

        <?php

        include ('./Librairies/navbar.php');

        ?>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>

        <!-- Section habitats -->

        <div class="container">
            <section class="habitats">
                <h2>Nos Habitats</h2>
                <div class="habitats-cards">
                    <div class="habitats-card">
                        <a href="Biome-Savane.php">
                            <div class="icon">
                                <img src="./Ressources/lion-7148207_1920.jpg" alt="Savane">
                            </div>
                            <h3>Biome Savane</h3>
                            <p>Découvrez la vie des animaux de la savane africaine.</p>
                        </a>
                    </div>
                    <div class="habitats-card">
                        <a href="Biome-Marais.php">
                            <div class="icon">
                                <img src="./Ressources/alligator-8308781_1920.jpg" alt="Marais">
                            </div>
                            <h3>Biome Marais</h3>
                            <p> Plongez dans les mystérieux marais et observez la faune unique qui y réside.</p>
                        </a>
                    </div>
                    <div class="habitats-card">
                        <a href="Biome-Jungle.php">
                            <div class="icon">
                                <img src="./Ressources/gorilla-7708352_1920.jpg" alt="Jungle">
                            </div>
                            <h3>Biome Jungle</h3>
                            <p>Explorez la dense jungle amazonienne et rencontrez ses habitants exotiques.</p>
                        </a>
                    </div>
                </div>
        </div>
        </section>

        <!-- Footer -->

        <?php

        include ("./Librairies/footer.php");

        ?>

    </body>

    </html>