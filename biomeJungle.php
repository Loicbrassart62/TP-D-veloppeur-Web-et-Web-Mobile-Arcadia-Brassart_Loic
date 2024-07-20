<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/biomeJungle.css?v=<?php echo time(); ?>">
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

    <!-- Video jungle -->

    <div class="video-background">
        <div class="video-wrap">
            <video autoplay muted loop class="video">
                <source src="./Ressources/mixkit-heavy-rain-in-the-tropical-forest-7006-hd-ready.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video-overlay"></div>
        <div class="video-content">
            <h1>Biome Jungle</h1>
            <p>Bienvenue dans le cœur palpitant de notre habitat jungle, où l'excitation de la biodiversité
                tropicale vous attend à chaque tournant !</p>
        </div>
    </div>

    <!-- Section animaux jungle -->

    <section>
        <div class="container">
            <h1>Présentation du Biome Jungle</h1>
            <p>Bienvenue dans notre secteur Jungle, où vous découvrirez l'un des biomes les plus luxuriants et
                diversifiés de la planète. Les jungles, également appelées forêts tropicales, sont des écosystèmes
                remarquables qui abritent une profusion de vie végétale et animale. Plongeons ensemble dans ce monde
                verdoyant et mystérieux pour en apprendre davantage sur ses habitants fascinants et ses
                caractéristiques uniques.</p>
            <h1>Venez découvrir tout les animaux de la Jungle !</h1>
        </div>
        <div class="container-2">
            <div class="card-container">
                <div class="card">
                    <a href="update_consultations.php?id=9" class="card-link">
                        <img src="./Ressources/jaguar-8104230_1920.jpg" alt="Jaguar" class="card-image">
                        <div class="card-name">Le Jaguar<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=10" class="card-link">
                        <img src="./Ressources/toucan-4240727_1920.jpg" alt="Toucan" class="card-image">
                        <div class="card-name">Le Toucan<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=11" class="card-link">
                        <img src="./Ressources/tapir-7504609_1920.jpg" alt="Tapir" class="card-image">
                        <div class="card-name">Le Tapir<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=12" class="card-link">
                        <img src="./Ressources/gorilla-4547188_1920.jpg" alt="Gorille" class="card-image">
                        <div class="card-name">Le Gorille<i class="fa-solid fa-chevron-right"></i></div>
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