<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/biome-savane.css?v=<?php echo time(); ?>">
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

    <!-- Video savane -->

    <div class="video-background">
        <div class="video-wrap">
            <video autoplay muted loop class="video">
                <source src="./Ressources/mixkit-lake-surrounded-by-dry-grass-in-the-savanna-5030-hd-ready.mp4"
                    type="video/mp4">
            </video>
        </div>
        <div class="video-overlay"></div>
        <div class="video-content">
            <h1>Biome Savane</h1>
            <p>Bienvenue dans la savane africaine, où la terre s'étend à perte de vue sous un ciel vaste et dégagé !
            </p>
        </div>
    </div>


    <!-- Section animaux savane -->

    <section>
        <div class="container">
            <h1>Présentation du Biome Savane</h1>
            <p>Bienvenue au secteur Savane de notre zoo ! La savane est un biome unique et fascinant, caractérisé
                par des paysages vastes et ouverts, où la végétation dominante est composée de hautes herbes et
                d'arbres épars. Ce type d'écosystème est surtout présent en Afrique, mais on le trouve également en
                Amérique du Sud, en Australie et en Inde.</p>
            <h1>Venez découvrir tout les animaux de la Savane !</h1>
        </div>
        <div class="container-2">
            <div class="card-container">
                <div class="card">
                    <a href="update_consultations.php?id=1" class="card-link">
                        <img src="./Ressources/lion-7148207_1920.jpg" alt="Lion" class="card-image">
                        <div class="card-name">Le Lion<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=2" class="card-link">
                        <img src="./Ressources/animal-4917802_1920.jpg" alt="Zèbre" class="card-image">
                        <div class="card-name">Le Zèbre<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=3" class="card-link">
                        <img src="./Ressources/zoo-5301038_1920 (1).jpg" alt="Girafe" class="card-image">
                        <div class="card-name">La Girafe<i class="fa-solid fa-chevron-right"></i></div>
                    </a>
                </div>
                <div class="card">
                    <a href="update_consultations.php?id=4" class="card-link">
                        <img src="./Ressources/rhino-1895111_1920.jpg" alt="Rhinocéros" class="card-image">
                        <div class="card-name">Le Rhinocéros<i class="fa-solid fa-chevron-right"></i></div>
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