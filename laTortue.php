<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/laTortue.css?v=<?php echo time(); ?>">
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

    <!-- Main image -->

    <section>
        <div class="hero-image">
            <div class="hero-text">
                <h1 class="main-tittle">La Tortue Alias "Léo"</h1>
                <p>Trachemys scripta</p>
            </div>
        </div>
    </section>

    <!-- Section tortue-->

    <section>
        <div class="container">
            <h1>Présentation de la Tortue</h1>
            <p>Nous sommes enchantés de vous présenter Léo, une des résidentes les plus charmantes et captivantes de
                notre zoo.</p>
            <p>Les tortues sont des reptiles emblématiques connus pour leur longévité, leur carapace distinctive et
                leur comportement tranquille.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire de la Tortue</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Léo</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Tortue Aquatique (Trachemys scripta)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 26 cm de long</li>
                        <li><strong>Age:</strong> 4 ans</li>
                        <li><strong>Poids:</strong> 3 kg</li>
                        <li><strong>Région d'origine:</strong> Marécages de l'Amérique du Nord</li>
                        <li><strong>Habitat:</strong> Marais</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Léo</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Plantes aquatiques et petits poissons</li>
                        <li><strong>Grammage de la nourriture:</strong> 100 g de poissons et de plantes aquatiques
                        </li>
                        <li><strong>Date de passage:</strong> 27/06/2024</li>
                    </ul>
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