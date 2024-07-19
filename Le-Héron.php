<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/le-héron.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Héron Alias "Adia"</h1>
                <p>Ardea cinerea</p>
            </div>
        </div>
    </section>

    <!-- Section heron-->

    <section>
        <div class="container">
            <h1>Présentation du Héron</h1>
            <p>Adia est une représentante élégante de l'espèce des hérons, connue pour ses longues pattes et son vol
                majestueux au-dessus des plans d'eau.</p>
            <p>Les hérons sont des oiseaux aquatiques qui captivent par leur apparence et leur comportement
                caractéristique.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Héron</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique d'Adia</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Héron cendré (Ardea cinerea)</li>
                        <li><strong>Genre:</strong> Femelle</li>
                        <li><strong>Taille:</strong> 1,7 mètres d'envergure</li>
                        <li><strong>Age:</strong> 8 ans</li>
                        <li><strong>Poids:</strong> 2,2 kg</li>
                        <li><strong>Région d'origine:</strong> Marais de l'Amérique du Nord</li>
                        <li><strong>Habitat:</strong> Marais</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire d'Adia</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Poissons</li>
                        <li><strong>Grammage de la nourriture:</strong> 300 g de poissons
                        </li>
                        <li><strong>Date de passage:</strong> 29/06/2024</li>
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