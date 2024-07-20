<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leRhinocéros.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Rhinocéros Alias "Sahib"</h1>
                <p>Rhinoceros unicornis</p>
            </div>
        </div>
    </section>

    <!-- Section rhinoceros -->

    <section>
        <div class="container">
            <h1>Présentation du Rhinocéros</h1>
            <p>Nous avons l'immense plaisir de vous présenter Sahib, un rhinocéros imposant et impressionnant.</p>
            <p>Les rhinocéros sont des créatures fascinantes, symbolisant à la fois la force et la vulnérabilité de
                la faune sauvage.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire de Sahib</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Sahib</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Rhinocéros (Rhinoceros unicornis)</li>
                        <li><strong>Genre:</strong> Mâle</li>
                        <li><strong>Taille:</strong> 3,8 mètres de long</li>
                        <li><strong>Age:</strong> 12 ans</li>
                        <li><strong>Poids:</strong> 2 500 kg</li>
                        <li><strong>Région d'origine:</strong> Savanes, prairies et zones boisées d'Afrique
                            subsaharienne</li>
                        <li><strong>Habitat:</strong> Savane</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Sahib</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Herbes et graminées</li>
                        <li><strong>Grammage de la nourriture:</strong> 52 kg d'herbes et de graminées</li>
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