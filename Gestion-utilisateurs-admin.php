<!-- PHP insert users -->

<?php

include ("config.php");

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role']) && isset($_POST['prenom']) && isset($_POST['nom'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];


    $sql = "INSERT INTO utilisateur (username, password, role_id, nom, prenom) VALUES ('$email', '$password', '$role', '$prenom', '$nom')";

    $requete = $pdo->prepare($sql);
    $result = $requete->execute();

    if ($result) {
        header('Location: Gestion-utilisateurs-admin.php');
    }


    $sql = "INSERT INTO utilisateur (username, password, role_id, nom, prenom) VALUES ('$email', '$password', '$role', '$prenom', '$nom')";

    $requete = $pdo->prepare($sql);
    $result = $requete->execute();

    if ($result) {
        header('Location: Gestion-utilisateurs-admin.php');
    }
}

?>

<?php

include ("config.php");

$sql = "SELECT label, role_id FROM role";
$requete = $pdo->prepare($sql);
$requete->execute();
$roles = $requete->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/utilisateurs.css?v=<?php echo time(); ?>">
    <title>Gestion Utilisateurs</title>
</head>

<body>

    <!-- Navbar -->

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

        <!-- Creation utilisateurs -->

        <div class="container">
            <div class="users-container">
                <h2>Créer utilisateurs</h2>
                <form action="Gestion-utilisateurs-admin.php" method="POST">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="input-group">
                        <label for="nom">Nom</label>
                        <input type="nom" id="nom" name="nom" required>
                    </div>
                    <div class="input-group">
                        <label for="prenom">Prénom</label>
                        <input type="prenom" id="prenom" name="prenom" required>
                    </div>
                    <div class="input-group">
                        <label for="role">Rôle</label>
                        <select type="role" id="role" name="role" required>
                            <option value="">--Choisir un rôle--</option>
                            <?php
                            foreach ($roles as $row) {
                                echo "<option value=" . $row['role_id'] . ">" . $row['label'] . "</option>";
                            }

                            ?>
                        </select>
                    </div>
                    <button type="submit" name="create">Créer</button>
                </form>
            </div>
        </div>

        <h1 class="titre-utilisateurs">Liste des utilisateurs</h1>



        <!-- PHP delete users -->

        <?php

        include ("config.php");

        if (isset($_POST['username_to_delete'])) {
            $username = $_POST['username_to_delete'];
            $sql = "DELETE FROM utilisateur WHERE utilisateur.username=:username";
            $requete = $pdo->prepare($sql);

            $requete->bindParam(':username', $username, PDO::PARAM_STR);

            $requete->execute();
        }

        $sql = "SELECT label, username, nom, prenom FROM utilisateur INNER JOIN role ON utilisateur.role_id=role.role_id";
        $requete = $pdo->prepare($sql);
        $requete->execute();
        $result = $requete->fetchAll(PDO::FETCH_ASSOC);



        if (sizeof($result) > 0) {
            echo
                "<div class='container-utilisateurs'>
            <table class='utilisateurs-table'>
            <thead>
                <tr>
                    <th>Rôle</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Action</th>
                    
                </tr>
            </thead>
            <tbody>";


            foreach ($result as $row) {
                echo "<tr>
                    <td>" . $row["label"] . "</td>  
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["nom"] . "</td>
                    <td>" . $row["prenom"] . "</td>
                    <td>
                    <form action='Gestion-utilisateurs-admin.php' method='post'>
                        <input type='hidden' name='username_to_delete' value='" . $row['username'] . "'>
                        <button type='submit'>Supprimer</button>
                    </form>
                </td>
              </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "Aucun utilisateur trouvé.";
        }
        ?>

</body>

</html>