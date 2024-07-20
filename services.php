<?php

include ("config.php");

$sql = "SELECT nom, description FROM service";
$requete = $pdo->prepare($sql);
$requete->execute();
$result = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Services.css?v=<?php echo time(); ?>">
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

    <!-- Section services -->

    <div class="container">
        <section class="services">
            <h2>Nos Services</h2>
            <div class="service-cards">
                <div class="service-card">
                    <h3>Visite du parc en petit train</h3>
                    <p>Le trajet en petit train vous permet de découvrir l'ensemble du parc sans effort, offrant une
                        vue panoramique des différents enclos et habitats.</p>
                </div>
                <div class="service-card">
                    <?php
                    if ($result) {
                        foreach ($result as $service) {
                            echo '<h3>' . htmlspecialchars($service['nom']) . '</h3>';
                            echo '<p>' . htmlspecialchars($service['description']) . '</p>';
                        }
                    }
                    ?>


                </div>
                <div class="service-card">
                    <h3>Visite du parc avec un guide (Gratuit)</h3>
                    <p>La visite guidée couvre plusieurs zones du zoo, chacune dédiée à différents types d'animaux
                        et habitats naturels. Le parcours est structuré pour maximiser l'apprentissage et
                        l'observation des animaux dans leurs environnements reconstitués.</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->

    <?php

    include ("./Librairies/footer.php");

    ?>
</body>

</html>
