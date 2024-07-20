<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/laGirafe.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">La Girafe Alias "Sofy"</h1>
                <p>Giraffa camelopardalis</p>
            </div>
        </div>
    </section>

    <!-- Section girafe -->

    <section>
        <div class="container">
            <h1>Présentation de la Girafe</h1>
            <p>Nous sommes ravis de vous présenter Sofy, l'une des résidentes les plus majestueuses et fascinantes
                de notre zoo.</p>
            <p>La girafe est un animal emblématique de la savane africaine, et Sofy ne fait pas exception avec son
                allure élégante et son caractère attachant.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire de Sofy</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Sofy</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Girafe (Giraffa camelopardalis)</li>
                        <li><strong>Genre:</strong> Femelle</li>
                        <li><strong>Taille:</strong> 5,5 mètres de haut</li>
                        <li><strong>Age:</strong> 7 ans</li>
                        <li><strong>Poids:</strong> 800 kg</li>
                        <li><strong>Région d'origine:</strong> Savanes Africaines</li>
                        <li><strong>Habitat:</strong> Savane</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Sofy</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Feuilles d'acacia, fruits et fleurs</li>
                        <li><strong>Grammage de la nourriture:</strong> 60 kg de végétaux</li>
                        <li><strong>Date de passage:</strong> 25/06/2024</li>
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