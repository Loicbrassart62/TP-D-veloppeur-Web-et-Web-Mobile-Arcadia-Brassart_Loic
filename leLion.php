<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leLion.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Lion Alias "Simba"</h1>
                <p>Panthera leo</p>
            </div>
        </div>
    </section>

    <!-- Section lion -->

    <section>
        <div class="container">
            <h1>Présentation du Lion</h1>
            <p>Simba est un lion imposant et majestueux, avec une crinière épaisse et dorée qui le distingue comme
                mâle adulte.</p>
            <p> Sa silhouette puissante et ses pattes robustes témoignent de sa force naturelle. Son
                pelage tacheté de nuances de brun et de beige lui permet de se fondre parfaitement dans les herbes
                hautes de son environnement naturel.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Lion </h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Simba</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Lion (Panthera leo)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 1.9 mètre de long</li>
                        <li><strong>Age:</strong> 12 ans</li>
                        <li><strong>Poids:</strong> 190 kg</li>
                        <li><strong>Région d'origine:</strong> Afrique subsaharienne</li>
                        <li><strong>Habitat:</strong> Savane</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Simba</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Viandes crues</li>
                        <li><strong>Grammage de la nourriture:</strong> 7 kg de viande</li>
                        <li><strong>Date de passage:</strong> 28/06/2024</li>
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