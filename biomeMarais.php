<!DOCTYPE php>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/biomeMarais.css?v=<?php echo time(); ?>">
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

    <!-- Video marais -->

    <div class="video-background">
        <div class="video-wrap">
            <video autoplay muted loop class="video">
                <source src="./Ressources/mixkit-swamp-with-floating-leaves-32675-hd-ready.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video-overlay"></div>
        <div class="video-content">
            <h1>Biome Marais</h1>
            <p>Bienvenue dans notre habitat dédié aux marais, où la nature s'épanouit dans une diversité fascinante
                !</p>
        </div>
    </div>

    <!-- Section animaux marais -->

    <section>
        <div class="container">
            <h1>Présentation du Biome Marais</h1>
            <p>Bienvenue au secteur Marais de notre zoo! Les marais sont des écosystèmes fascinants et diversifiés
                qui jouent un rôle crucial dans la biodiversité mondiale. Ces zones humides, souvent mal comprises,
                abritent une multitude de plantes, d'animaux et de micro-organismes adaptés à des conditions
                spécifiques. Explorons ensemble ce biome unique et ses habitants remarquables.</p>
            <h1>Venez découvrir tout les animaux du Marais !</h1>
        </div>
        <div class="container-2">
            <div class="card-container">
                <div class="card">
                    <a href="update_consultations.php?id=5" class="card-link">
                        <img src="./Ressources/otter-7228458_1920.jpg" alt="Loutre" class="card-image">
                        <div class="card-name">La Loutre<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=6" class="card-link">
                        <img src="./Ressources/animal-8169942_1920.jpg" alt="Alligator" class="card-image">
                        <div class="card-name">L'Alligator<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=7" class="card-link">
                        <img src="./Ressources/turtle-5568624_1920.jpg" alt="Tortue" class="card-image">
                        <div class="card-name">La Tortue<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=8" class="card-link">
                        <img src="./Ressources/heron-5218997_1920.jpg" alt="Héron" class="card-image">
                        <div class="card-name">Le Héron<i class="fa-solid fa-chevron-right"></i></div>
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