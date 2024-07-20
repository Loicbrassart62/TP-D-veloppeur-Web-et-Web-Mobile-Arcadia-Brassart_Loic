<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leZebre.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Zèbre Alias "Nora"</h1>
                <p>Equus quagga</p>
            </div>
        </div>
    </section>

    <!-- Section zèbre -->

    <section>
        <div class="container">
            <h1>Présentation du Zèbre</h1>
            <p>Nora est une magnifique zèbre avec un pelage distinctif rayé noir et blanc, qui non seulement la rend
                unique, mais aussi joue un rôle crucial dans sa protection contre les prédateurs.</p>
            <p>Chaque zèbre a un motif de rayures unique, tout comme les empreintes digitales chez les humains.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Zèbre</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Nora</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Zèbre de plaine (Equus quagga)</li>
                        <li><strong>Genre:</strong> Femelle</li>
                        <li><strong>Taille:</strong> 1,3 mètre au garrot</li>
                        <li><strong>Age:</strong> 6 ans</li>
                        <li><strong>Poids:</strong> 300 kg</li>
                        <li><strong>Région d'origine:</strong> Afrique du Sud</li>
                        <li><strong>Habitat:</strong> Savane</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Nora</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Herbes et graminées</li>
                        <li><strong>Grammage de la nourriture:</strong> 15 kg d'herbes et de graminées</li>
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