<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leGorille.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Gorille Alias "Bobby"</h1>
                <p>Gorilla gorilla gorilla</p>
            </div>
        </div>
    </section>

    <!-- Section tapir -->

    <section>
        <div class="container">
            <h1>Présentation du Gorille</h1>
            <p>Venez rencontrer Bobby et découvrez son monde captivant au zoo. Votre visite soutient directement nos
                efforts de conservation et d'éducation.</p>
            <p>Avec un dos argenté distinctif qui se développe avec l'âge, Bobby possède une peau noire dense et des
                traits faciaux expressifs qui dénotent son intelligence et sa sensibilité. Son regard profond et
                calme captive les visiteurs, révélant une personnalité curieuse et observatrice.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Gorille</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Bobby</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Gorille des plaines de l'Ouest (Gorilla gorilla gorilla)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 1,8 mètre en position assise</li>
                        <li><strong>Age:</strong> 12 ans</li>
                        <li><strong>Poids:</strong> 160 kg</li>
                        <li><strong>Région d'origine:</strong> Forêts tropicales d'Afrique centrale</li>
                        <li><strong>Habitat:</strong> Jungle</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Bobby</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Fruits, feuilles et légumes</li>
                        <li><strong>Grammage de la nourriture:</strong> 5 kg de végétaux</li>
                        <li><strong>Date de passage:</strong> 24/06/2024</li>
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