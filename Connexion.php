<?php

include ('./config.php');


$message = '';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM utilisateur INNER JOIN role ON utilisateur.role_id=role.role_id WHERE username=:email AND password=:password";
    $requete = $pdo->prepare($sql);

    $requete->bindParam(':email', $email, PDO::PARAM_STR);
    $requete->bindParam(':password', $password, PDO::PARAM_STR);

    $requete->execute();

    $result = $requete->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        $role = $result[0]['label'];
        if ($role === 'Admin') {
            header('Location: admin.php');
        } else if ($role === 'Vétérinaire') {
            header('Location: veterinaire.php');
        } else if ($role === 'Employé') {
            header('Location: employe.php');
        }
    } else {
        $message = 'Mot de passe ou email incorrect.';
    }
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/connexion.css?v=<?php echo time(); ?>">
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

    <!-- Page connexion -->

    <div class="container">
        <div class="login-container">
            <h2>Connexion</h2>
            <form action="Connexion.php" method="POST">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" name="connexion">Se connecter</button>
                <div class="message">

                    <?php

                    echo $message;

                    ?>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->

    <?php

    include ("./Librairies/footer.php");

    ?>

</body>

</html>