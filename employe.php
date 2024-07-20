<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/employe.css?v=<?php echo time(); ?>">
    <title>Espace Employé</title>
</head>

<body>
    <div id="wrap">
        <nav>
            <div class="logo">
                <a href="employe.php">Espace employé</a>
            </div>
            <button type="button" class="btn-hamburger" data-action="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li class="nav-item"><a href="Gestion-avis-employe.php">Gérer avis</a></li>
                <li class="nav-item"><a href="Gestion-services-employe.php">Gérer services</a></li>
                <li class="nav-item dropdown">
                    <a href="Gestion-alimentation-employe.php" data-action="dropdown-toggle">Gestion alimentation</a>
                </li>
                <li class="nav-item"><a href="connexion.php">Déconnexion</a></li>
            </ul>
        </nav>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>


        <!-- Dashboard -->

        <div class="container">
            <div class="dashboard">
                <h2 class="dashboard-title">Bienvenue dans votre espace employé</h2>
                <div class="dashboard-cards">
                    <div class="card">
                        <h3 class="card-title">Gestion des avis</h3>
                        <p class="card-description">Visualisez les avis des visiteurs vous pouvez valider un avis ou
                            l’invalider.</p>
                        <a href="Gestion-avis-employe.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Gestion des services</h3>
                        <p class="card-description">Créer et modifier les services du zoo.</p>
                        <a href="Gestion-services-employe.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Gestion de l'alimentation</h3>
                        <p class="card-description">Gérer l'alimentation quotidienne de tout les animaux.
                        </p>
                        <a href="Gestion-alimentation-employe.php" class="card-link">Accéder</a>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>
