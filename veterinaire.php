<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/veterinaire.css?v=<?php echo time(); ?>">
    <title>Espace Vétérinaire</title>
</head>

<body>
    <div id="wrap">
        <nav>
            <div class="logo">
                <a href="veterinaire.php">Espace Vétérinaire</a>
            </div>
            <button type="button" class="btn-hamburger" data-action="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li class="nav-item"><a href="Comptes-rendus-animaux.php">Comptes rendus animaux</a></li>
                <li class="nav-item"><a href="Gestion-habitats-veterinaire.php">Gestion habitats</a></li>
                <li class="nav-item dropdown">
                    <a href="Gestion-animaux-veterinaire.php" data-action="dropdown-toggle">Animaux</a>
                </li>
                <li class="nav-item"><a href="Connexion.php">Déconnexion</a></li>
            </ul>
        </nav>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>

        <!-- Dashboard -->

        <div class="container">
            <div class="dashboard">
                <h2 class="dashboard-title">Bienvenue dans votre espace vétérinaire</h2>
                <div class="dashboard-cards">
                    <div class="card">
                        <h3 class="card-title">Gestion des comptes rendus</h3>
                        <p class="card-description">Remplissez les comptes rendus pour les animaux.</p>
                        <a href="Comptes-rendus-animaux.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Gestion des habitats</h3>
                        <p class="card-description">Commentez les habitats pour pouvoir donner votre avis.</p>
                        <a href="Gestion-habitats-veterinaire.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Gestion des animaux</h3>
                        <p class="card-description">Visualisez tout ce que les animaux ont pu manger.
                        </p>
                        <a href="Gestion-animaux-veterinaire.php" class="card-link">Accéder</a>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>