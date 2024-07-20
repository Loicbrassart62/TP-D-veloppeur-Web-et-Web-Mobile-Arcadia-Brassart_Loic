<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/gestion-animaux-veterinaire.css?v=<?php echo time(); ?>">
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

        <!-- Tableau alimentation animaux -->

        <div class="container">
            <h1 class="titre-animaux">Compte rendu alimentation des animaux</h1>
        </div>
        <?php
        include ("config.php");

        $sql = "SELECT animal_id, date, type_nourriture, quantite, unite FROM consommation";
        $requete = $pdo->prepare($sql);
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);

        if (isset($_POST['delete'])) {
            $animal_id = $_POST['nom_to_delete'];

            $sql = "DELETE FROM consommation WHERE animal_id = :animal_id";
            $requete = $pdo->prepare($sql);
            $requete->execute(['animal_id' => $animal_id]);
            header('Location: Gestion-animaux-veterinaire.php');
            exit();
        }

        if (sizeof($result) > 0) {
            echo "<div class='container-services'>
        <table class='services-table'>
            <thead>
                <tr>
                    <th>Nom de l'animal</th>
                    <th>Date et heure de passage</th>
                    <th>Nourriture</th>
                    <th>Quantité</th>
                    <th>Unité</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>";

            foreach ($result as $row) {
                echo "<tr>
            <td>" . htmlspecialchars($row["animal_id"], ENT_QUOTES) . "</td>
            <td>" . htmlspecialchars($row["date"], ENT_QUOTES) . "</td>
            <td>" . htmlspecialchars($row["type_nourriture"], ENT_QUOTES) . "</td>
            <td>" . htmlspecialchars($row["quantite"], ENT_QUOTES) . "</td>
            <td>" . htmlspecialchars($row["unite"], ENT_QUOTES) . "</td>
            <td>
                <form action='Gestion-animaux-veterinaire.php' method='post' style='display: inline;'>
                    <input type='hidden' name='nom_to_delete' value='" . htmlspecialchars($row["animal_id"], ENT_QUOTES) . "'>
                    <button type='submit' name='delete'>Supprimer</button>
                </form>
            </td>
        </tr>";
            }

            echo "</tbody></table></div>";
        } else {
            echo "Aucun animal trouvé.";
        }
        ?>



</body>

</html>