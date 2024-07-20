<?php

include ("config.php");

$message = '';

if (isset($_POST['pseudo']) && isset($_POST['message'])) {
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];
    $IsVisible = 0;

    $sql = "INSERT INTO avis (pseudo, commentaire, IsVisible) VALUES (:pseudo, :commentaire, :IsVisible)";
    $requete = $pdo->prepare($sql);

    $requete->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $requete->bindParam(':commentaire', $message, PDO::PARAM_STR);
    $requete->bindParam(':IsVisible', $IsVisible, PDO::PARAM_INT);

    $result = $requete->execute();

    $message = 'Commentaire envoyé !';

}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Avis.css?v=<?php echo time(); ?>">
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

    <!-- Page avis -->

    <div class="container">
        <div class="contact-form">
            <h2>Laisser nous un commentaire !</h2>
            <form action=Avis.php method="POST">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="pseudo" id="pseudo" name="pseudo" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
                <?php

                echo $message;

                ?>
            </form>
        </div>
    </div>

    <!-- Footer -->

    <?php

    include ("./Librairies/footer.php");

    ?>

</body>

</html>
