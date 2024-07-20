<?php
include ("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $nom = $_POST['nom'];
        $description = $_POST['description'];

        $sql = "INSERT INTO service (nom, description) VALUES (:nom, :description)";
        $requete = $pdo->prepare($sql);
        $result = $requete->execute(['nom' => $nom, 'description' => $description]);

        if ($result) {
            header('Location: Gestion-services-employe.php');
            exit();
        }
    } elseif (isset($_POST['update'])) {
        $nom = $_POST['nom'];
        $new_nom = $_POST['new_nom'];
        $description = $_POST['description'];

        $sql = "UPDATE service SET nom = :new_nom, description = :description WHERE nom = :nom";
        $requete = $pdo->prepare($sql);
        $result = $requete->execute(['new_nom' => $new_nom, 'description' => $description, 'nom' => $nom]);

        if ($result) {
            header('Location: Gestion-services-employe.php');
            exit();
        }
    } elseif (isset($_POST['delete'])) {
        $nom = $_POST['nom_to_delete'];

        $sql = "DELETE FROM service WHERE nom = :nom";
        $requete = $pdo->prepare($sql);
        $requete->execute(['nom' => $nom]);
        header('Location: Gestion-services-employe.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/gestion-services.css?v=<?php echo time(); ?>">
    <title>Gestion Services</title>
</head>

<body>

    <!-- Navbar -->

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

        <!-- Creation services -->
        <div class="container">
            <div class="services-container">
                <h2>Créer services</h2>
                <form action="Gestion-services-employe.php" method="POST">
                    <div class="input-group">
                        <label for="nom">Titre du service</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="input-group">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="10" required></textarea>
                    </div>
                    <button type="submit" name="create">Créer</button>
                </form>
            </div>
        </div>

        <h1 class="titre-services">Liste des services</h1>

        <?php
        $sql = "SELECT nom, description FROM service";
        $requete = $pdo->prepare($sql);
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);

        if (sizeof($result) > 0) {
            echo "<div class='container-services'>
                    <table class='services-table'>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>";

            foreach ($result as $row) {
                echo "<tr>
                        <td>
                            <form action='Gestion-services-employe.php' method='post' style='display: inline;'>
                                <input type='text' name='new_nom' value='" . htmlspecialchars($row["nom"], ENT_QUOTES) . "'>
                        </td>
                        <td>
                                <textarea name='description' rows='4'>" . htmlspecialchars($row["description"], ENT_QUOTES) . "</textarea>
                        </td>
                        <td>
                                <input type='hidden' name='nom' value='" . htmlspecialchars($row["nom"], ENT_QUOTES) . "'>
                                <button type='submit' name='update'>Modifier</button>
                            </form>
                            <form action='Gestion-services-employe.php' method='post' style='display: inline;'>
                                <input type='hidden' name='nom_to_delete' value='" . htmlspecialchars($row["nom"], ENT_QUOTES) . "'>
                                <button type='submit' name='delete'>Supprimer</button>
                            </form>
                        </td>
                    </tr>";
            }

            echo "</tbody></table></div>";
        } else {
            echo "Aucun service trouvé.";
        }
        ?>
</body>

</html>
