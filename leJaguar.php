<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leJaguar.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Jaguar Alias "Balam"</h1>
                <p>Panthera onca</p>
            </div>
        </div>
    </section>

    <!-- Section jaguar -->

    <section>
        <div class="container">
            <h1>Présentation du Jaguar</h1>
            <p>Balam est un jaguar mâle imposant qui attire les visiteurs par sa beauté et sa présence dominante.
            </p>
            <p>Les jaguars sont parmi les plus grands prédateurs terrestres d'Amérique, réputés pour leur agilité et
                leur rôle crucial dans les écosystèmes de la forêt tropicale.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Jaguar</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Balam</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Jaguar (Panthera onca)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 2,2 mètres de long</li>
                        <li><strong>Age:</strong> 9 ans</li>
                        <li><strong>Poids:</strong> 70 kg</li>
                        <li><strong>Région d'origine:</strong> Forêts tropicales d'Amérique du Sud</li>
                        <li><strong>Habitat:</strong> Jungle</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Balam</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Viandes</li>
                        <li><strong>Grammage de la nourriture:</strong> 2 kg de viandes</li>
                        <li><strong>Date de passage:</strong> 01/07/2024</li>
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