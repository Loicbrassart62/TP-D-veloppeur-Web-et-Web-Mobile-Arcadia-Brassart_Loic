<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/gestion-habitats-veterinaire.css?v=<?php echo time(); ?>">
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

        <div class="container">

            <?php

            include ("config.php");

            $message = "";

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $veterinarian_name = $_POST['veterinarian_name'];
                $habitat_id = $_POST['habitat_id'];
                $comment = $_POST['comment'];


                if (!empty($veterinarian_name) && !empty($habitat_id) && !empty($comment)) {
                    try {

                        $pdo = new PDO($dsn, $user, $pass);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                        $stmt = $pdo->prepare('INSERT INTO comments (habitat_id, veterinarian_name, comment) VALUES (:habitat_id, :veterinarian_name, :comment)');
                        $stmt->execute([
                            ':habitat_id' => $habitat_id,
                            ':veterinarian_name' => $veterinarian_name,
                            ':comment' => $comment
                        ]);

                        $message = "<p class='success-message'>Commentaire ajouté avec succès!</p>";
                    } catch (PDOException $e) {
                        $message = "<p class='error-message'>Erreur : " . $e->getMessage() . "</p>";
                    }
                } else {
                    $message = "<p class='error-message'>Veuillez remplir tous les champs.</p>";
                }
            }
            ?>

            <form class="habitat" action="Gestion-habitats-veterinaire.php" method="POST">
                <label for="veterinarian_name">Nom du vétérinaire :</label>
                <input type="text" id="veterinarian_name" name="veterinarian_name" required><br>

                <label for="habitat_id">Habitat :</label>
                <select id="habitat_id" name="habitat_id" required>
                    <?php

                    try {
                        $pdo = new PDO($dsn, $user, $pass);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $stmt = $pdo->query('SELECT id, habitat_name FROM habitats');
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['habitat_name'] . "</option>";
                        }
                    } catch (PDOException $e) {
                        echo "Erreur de connexion : " . $e->getMessage();
                    }
                    ?>
                </select><br>

                <label for="comment">Commentaire :</label>
                <textarea id="comment" name="comment" required></textarea><br>

                <input type="submit" value="Ajouter commentaire">


                <?php if (!empty($message)): ?>
                    <?php echo $message; ?>
                <?php endif; ?>
            </form>
        </div>
    </div>

    <h1 class="titre-services">Gestion des habitats</h1>

    <?php
    include ("config.php");

    $sql = "SELECT habitat_id, veterinarian_name, comment FROM comments";
    $requete = $pdo->prepare($sql);
    $requete->execute();
    $result = $requete->fetchAll(PDO::FETCH_ASSOC);


    if (isset($_POST['delete'])) {
        $nom = $_POST['nom_to_delete'];

        $sql = "DELETE FROM comments WHERE veterinarian_name = :veterinarian_name";
        $requete = $pdo->prepare($sql);
        $requete->execute(['veterinarian_name' => $nom]);
        header('Location: Gestion-habitats-veterinaire.php');
        exit();
    }


    if (sizeof($result) > 0) {
        echo "<div class='container-services'>
                    <table class='services-table'>
                        <thead>
                            <tr>
                                <th>Nom de l'habitat</th>
                                <th>Nom du vétérinaire</th>
                                <th>Commentaire</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>";

        foreach ($result as $row) {
            echo "<tr>
                        <td>" . htmlspecialchars($row["habitat_id"], ENT_QUOTES) . "</td>
                        <td>" . htmlspecialchars($row["veterinarian_name"], ENT_QUOTES) . "</td>
                        <td>" . htmlspecialchars($row["comment"], ENT_QUOTES) . "</td>
                        
                        <td>
                            <form action='Gestion-habitats-veterinaire.php' method='post' style='display: inline;'>
                                <input type='hidden' name='nom_to_delete' value='" . htmlspecialchars($row["veterinarian_name"], ENT_QUOTES) . "'>
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