<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/la-loutre.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">La Loutre Alias "Moutig"</h1>
                <p>Lutra lutra</p>
            </div>
        </div>
    </section>

    <!-- Section loutre-->

    <section>
        <div class="container">
            <h1>Présentation de la Loutre</h1>
            <p>Nous sommes enchantés de vous présenter Sahib, une des résidentes les plus charismatiques de notre
                zoo.</p>
            <p>Les loutrères, aussi connues sous le nom de loutres, sont des prédateurs semi-aquatiques adorés pour
                leur intelligence et leur agilité.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire de la Loutre</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Moutig</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Loutre (Lutra lutra)</li>
                        <li><strong>Genre:</strong> Femelle</li>
                        <li><strong>Taille:</strong> 72 cm de long</li>
                        <li><strong>Age:</strong> 6 ans</li>
                        <li><strong>Poids:</strong> 7 kg</li>
                        <li><strong>Région d'origine:</strong> Rivières d'Europe</li>
                        <li><strong>Habitat:</strong> Marais</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Moutig</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Poissons</li>
                        <li><strong>Grammage de la nourriture:</strong> 1,5 à 2 kg de poissons</li>
                        <li><strong>Date de passage:</strong> 22/06/2024</li>
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