<?php
include ("config.php");


if (isset($_POST['update_visibility'])) {
    $pseudo = $_POST['nom_to_update'];
    $isVisible = $_POST['isVisible'];

    // Inverser la valeur de IsVisible
    $newIsVisible = $isVisible == '1' ? 0 : 1;

    $sql = "UPDATE avis SET IsVisible = :isVisible WHERE pseudo = :pseudo";
    $requete = $pdo->prepare($sql);
    $requete->execute(['isVisible' => $newIsVisible, 'pseudo' => $pseudo]);
    header('Location: Gestion-avis-employe.php');
    exit();
}

if (isset($_POST['delete'])) {
    $pseudo = $_POST['nom_to_delete'];

    $sql = "DELETE FROM avis WHERE pseudo = :pseudo";
    $requete = $pdo->prepare($sql);
    $requete->execute(['pseudo' => $pseudo]);
    header('Location: Gestion-avis-employe.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/gestion-avis-employe.css?v=<?php echo time(); ?>">
    <title>Gestion Avis</title>
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
                <li class="nav-item"><a href="Connexion.php">Déconnexion</a></li>
            </ul>
        </nav>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>

        <div class="container">
            <h1 class="titre-avis">Liste des avis</h1>
        </div>

        <?php
        $sql = "SELECT pseudo, commentaire, IsVisible FROM avis";
        $requete = $pdo->prepare($sql);
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);

        if (sizeof($result) > 0) {
            echo "<div class='container-services'>
                    <table class='services-table'>
                        <thead>
                            <tr>
                                <th>Pseudo</th>
                                <th>Commentaire</th>
                                <th>Affichage</th>
                                <th>Action</th>  
                            </tr>
                        </thead>
                        <tbody>";

            foreach ($result as $row) {
                echo "<tr>
                                    <td>" . htmlspecialchars($row["pseudo"], ENT_QUOTES) . "</td>
                                    <td>" . nl2br(htmlspecialchars($row["commentaire"], ENT_QUOTES)) . "</td>
                                    <td>" . ($row['IsVisible'] ? 'Oui' : 'Non') . "</td>
                                    <td>
                                        <form action='Gestion-avis-employe.php' method='post' style='display: inline;'>
                                            <input type='hidden' name='nom_to_update' value='" . htmlspecialchars($row["pseudo"], ENT_QUOTES) . "'>
                                            <input type='hidden' name='isVisible' value='" . ($row['IsVisible'] ? '1' : '0') . "'>
                                            <button type='submit' name='update_visibility'>" . ($row['IsVisible'] ? 'Cacher' : 'Afficher') . "</button>
                                        </form>
                                        <form action='Gestion-avis-employe.php' method='post' style='display: inline;'>
                                            <input type='hidden' name='nom_to_delete' value='" . htmlspecialchars($row["pseudo"], ENT_QUOTES) . "'>
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