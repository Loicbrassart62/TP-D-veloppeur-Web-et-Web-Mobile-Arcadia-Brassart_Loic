<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/alligator.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">L'Alligator Alias "Hector"</h1>
                <p>Alligator mississippiensis</p>
            </div>
        </div>
    </section>

    <!-- Section alligator-->

    <section>
        <div class="container">
            <h1>Présentation de L'Alligator</h1>
            <p>Nous sommes ravis de vous présenter Hector, une véritable icône des marécages et des cours d'eau du
                sud-est des États-Unis.</p>
            <p>Les alligators sont des reptiles fascinants, connus pour leur apparence préhistorique et leur rôle
                crucial dans les écosystèmes aquatiques.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire de L'Alligator</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Hector</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Alligator (Alligator mississippiensis)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 4,5 mètres de long</li>
                        <li><strong>Age:</strong> 20 ans</li>
                        <li><strong>Poids:</strong> 400 kg</li>
                        <li><strong>Région d'origine:</strong> Marécages du sud-est des États-Unis</li>
                        <li><strong>Habitat:</strong> Marais</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Hector</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Poissons et viandes</li>
                        <li><strong>Grammage de la nourriture:</strong> 1 à 2 kg de poissons et de viandes</li>
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