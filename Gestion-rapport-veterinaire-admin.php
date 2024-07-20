<?php

include ("config.php");

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
    <link rel="stylesheet" href="/CSS/gestion-rapport-veterinaire-admin.css?v=<?php echo time(); ?>">
    <title>Gestion rapport vétérinaire</title>
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
                <li class="nav-item"><a href="connexion.php">Déconnexion</a></li>
            </ul>
        </nav>

        <!-- Script pour Menu burger -->

        <script src="./Script/script-burger.js"></script>



        <div class="container">
            <div class="services-container">
                <h2>Rechercher rapport vétérinaire</h2>
            </div>
            <form action="Gestion-rapport-veterinaire-admin.php" method="POST">
                <div class="input-group">
                    <label for="date">Date de passage</label>
                    <input type="date" id="date" name="date">
                </div>
                <div class="input-group">
                    <label for="animal">Animaux</label>
                    <select type="animal" id="animal" name="animal">
                        <option value="">--Choisir un animal--</option>
                        <?php


                        $sql = "SELECT animal_id, prenom FROM animal";
                        $requete = $pdo->prepare($sql);
                        $requete->execute();
                        $result = $requete->fetchAll(PDO::FETCH_ASSOC);


                        foreach ($result as $row) {
                            echo "<option value=" . $row['animal_id'] . ">" . $row['prenom'] . "</option>";
                        }

                        ?>
                    </select>
                </div>
                <input name="research" type='hidden' value="true">
                <button class="btn-research" type="submit" name="research">Rechercher</button>

            </form>

        </div>



        <h1 class="titre-rapports">Liste des rapports</h1>


        <!-- PHP delete users -->

        <?php

        include ("config.php");

        if (isset($_POST['research'])) {
            $animal = $_POST['animal'];
            $date = $_POST['date'];
            $date_min = $date . " 00:00:00";
            $date_max = $date . " 23:59:59";
            if ($date && $animal) {
                $sql = "SELECT etat_animal, date, type_nourriture, quantite, unite, prenom FROM rapport_veterinaire INNER JOIN animal ON animal.animal_id=rapport_veterinaire.animal_id WHERE animal.animal_id=:animal_id AND date >=:date_min AND date<=:date_max";
            } else if ($date) {
                $sql = "SELECT etat_animal, date, type_nourriture, quantite, unite, prenom FROM rapport_veterinaire INNER JOIN animal ON animal.animal_id=rapport_veterinaire.animal_id WHERE date >=:date_min AND date<=:date_max";
            } else {
                $sql = "SELECT etat_animal, date, type_nourriture, quantite, unite, prenom FROM rapport_veterinaire INNER JOIN animal ON animal.animal_id=rapport_veterinaire.animal_id WHERE animal.animal_id=:animal_id";
            }

            $requete = $pdo->prepare($sql);
            if ($animal) {
                $requete->bindParam(':animal_id', $animal, PDO::PARAM_STR);
            }

            if ($date) {
                $requete->bindParam(':date_min', $date_min, PDO::PARAM_STR);
                $requete->bindParam(':date_max', $date_max, PDO::PARAM_STR);
            }

            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "SELECT etat_animal, date, type_nourriture, quantite, unite, prenom FROM rapport_veterinaire INNER JOIN animal ON animal.animal_id=rapport_veterinaire.animal_id";
            $requete = $pdo->prepare($sql);
            $requete->execute();
            $result = $requete->fetchAll(PDO::FETCH_ASSOC);
        }

        if (sizeof($result) > 0) {
            echo
                "<div class='container-utilisateurs'>
    <table class='utilisateurs-table'>
    <thead>
        <tr>
            <th>état animal</th>
            <th>Date de passage</th>
            <th>nourriture</th>
            <th>quantitée</th>
            <th>unité</th>
            <th>prénom</th>
            
        </tr>
    </thead>
    <tbody>";


            foreach ($result as $row) {
                echo "<tr>
            <td>" . $row["etat_animal"] . "</td>  
            <td>" . $row["date"] . "</td>
            <td>" . $row["type_nourriture"] . "</td>
            <td>" . $row["quantite"] . "</td>
            <td>" . $row["unite"] . "</td>
            <td>" . $row["prenom"] . "</td>
            
      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "Aucun rapports trouvé.";
        }
        ?>



</body>

</html>
