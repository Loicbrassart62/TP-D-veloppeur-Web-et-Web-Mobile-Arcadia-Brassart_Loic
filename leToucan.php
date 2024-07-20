<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/leToucan.css?v=<?php echo time(); ?>">
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
                <h1 class="main-tittle">Le Toucan Alias "Rubis"</h1>
                <p>Ramphastos dicolorus</p>
            </div>
        </div>
    </section>

    <!-- Section toucan -->

    <section>
        <div class="container">
            <h1>Présentation du Toucan</h1>
            <p>Rubis est une ambassadrice de la beauté exotique et de la biodiversité des oiseaux tropicaux. Les
                toucans sont célèbres pour leur bec vif et leur plumage éclatant, attirant l'attention parmi les
                visiteurs du zoo.</p>
            <p>Les toucans sont célèbres pour leur bec vif et leur plumage éclatant, attirant l'attention parmi les
                visiteurs du zoo.</p>

        </div>
        <div class="fiche">
            <h1>Fiche technique et rapport du vétérinaire du Toucan</h1>
        </div>
        <div class="container-card">
            <div class="card">
                <div class="card-header">
                    <h1>Fiche technique de Rubis</h1>
                    <i class="fas fa-paw"></i>
                </div>
                <div class="card-details">
                    <ul>
                        <li><strong>Espèce:</strong> Toucan à Bec Vert (Ramphastos dicolorus)</li>
                        <li><strong>Genre:</strong> Femelle</li>
                        <li><strong>Taille:</strong> 50 cm de long</li>
                        <li><strong>Age:</strong> 5 ans</li>
                        <li><strong>Poids:</strong> 400 g</li>
                        <li><strong>Région d'origine:</strong> Forêts tropicales d'Amérique du Sud</li>
                        <li><strong>Habitat:</strong> Jungle</li>
                    </ul>
                </div>
            </div>
            <div class="veterinaire-card">
                <div class="veterinaire-header">
                    <h1>Rapport vétérinaire de Rubis</h1>
                    <i class="fa-solid fa-briefcase-medical"></i>
                </div>
                <div class="veterinaire-details">
                    <ul>
                        <li><strong>État de l’animal:</strong> En bonne santé</li>
                        <li><strong>Nourriture:</strong> Fruits et insectes</li>
                        <li><strong>Grammage de la nourriture:</strong> 120 g de fruits et d'insectes</li>
                        <li><strong>Date de passage:</strong> 21/06/2024</li>
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