<?php

include ('config.php');

try {
    $stmt = $pdo->query('SELECT name, consultations FROM consultation');
    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/admin.css?v=<?php echo time(); ?>">
    <title>Espace Administrateur</title>
</head>

<body>
    <div id="wrap">
        <nav>
            <div class="logo">
                <a href="admin.php">Espace Administrateur</a>
            </div>
            <button type="button" class="btn-hamburger" data-action="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li class="nav-item"><a href="Gestion-utilisateurs-admin.php">Gérer utilisateurs</a></li>
                <li class="nav-item"><a href="Gestion-services-admin.php">Gérer services</a></li>
                <li class="nav-item dropdown">
                    <a href="Gestion-rapport-veterinaire-admin.php" data-action="dropdown-toggle">Rapport
                        vétérinaire</a>
                </li>
                <li class="nav-item"><a href="Connexion.php">Déconnexion</a></li>
            </ul>
        </nav>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>


        <!-- Dashboard -->
        <div class="container-dashboard">
            <div class="dashboard">
                <h2 class="dashboard-title">Bienvenue dans votre espace administrateur</h2>
                <div class="dashboard-cards">
                    <div class="card">
                        <h3 class="card-title">Gestion des utilisateurs</h3>
                        <p class="card-description">Gérer et créer différents utilisateurs pour le zoo.</p>
                        <a href="Gestion-utilisateurs-admin.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Gestion des services</h3>
                        <p class="card-description">Créer et modifier les services du zoo.</p>
                        <a href="Gestion-services-admin.php" class="card-link">Accéder</a>
                    </div>
                    <div class="card">
                        <h3 class="card-title">Rapport du vétérinaire</h3>
                        <p class="card-description">Visualisez et rechercher les comptes rendus sur les animaux.
                        </p>
                        <a href="Gestion-rapport-veterinaire-admin.php" class="card-link">Accéder</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tableau consultations -->

        <h2 class="consultations-title">Consultations des animaux</h2>

        <div class="container">
            <h1>Consultations des animaux</h1>
            <div class="table-container">
                <table>
                    <tr>
                        <th>Animal</th>
                        <th>Consultations</th>
                    </tr>
                    <?php foreach ($animals as $animal): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($animal['name']); ?></td>
                            <td><?php echo htmlspecialchars($animal['consultations']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="button-container">
                <form method="post" action="reset_consultations.php">
                    <button class="btn-table" type="submit">Réinitialiser les consultations</button>
                </form>
            </div>
        </div>


</body>

</html>