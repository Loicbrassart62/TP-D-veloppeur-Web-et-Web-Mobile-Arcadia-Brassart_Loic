<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/contact.css?v=<?php echo time(); ?>">
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

    <!-- Page de contact -->

    <div class="container">
        <div class="contact-form">
            <h2>Contactez-nous</h2>
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="820c87fa-d4e5-45a0-be3d-14e0aa7dcaf6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>

    <!-- Footer -->

    <?php

    include ("./Librairies/footer.php");

    ?>
</body>

</html>