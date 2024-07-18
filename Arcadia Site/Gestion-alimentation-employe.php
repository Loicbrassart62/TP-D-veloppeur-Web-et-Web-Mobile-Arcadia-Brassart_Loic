<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/gestion-alimentation-employe.css?v=<?php echo time(); ?>">
    <title>Gestion Alimentation</title>
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



        <?php

        include 'config.php';
        $message = '';


        $stmt = $pdo->query("SELECT `prenom`, `animal_id` FROM `animal`");
        $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="container">
            <form method="post" action="">
                <label for="animal_id">Prénom de l'animal:</label>
                <select id="animal_id" name="animal_id" required>
                    <?php foreach ($animals as $animal): ?>
                        <option value="<?= htmlspecialchars($animal['animal_id']) ?>">
                            <?= htmlspecialchars($animal['prenom']) ?>
                        </option>
                    <?php endforeach; ?>
                </select><br>

                <label for="date">Date et heure:</label>
                <input type="datetime-local" id="date" name="date" required><br>

                <label for="type_nourriture">Type de nourriture:</label>
                <input type="text" id="type_nourriture" name="type_nourriture" required><br>

                <label for="quantite">Quantité:</label>
                <input type="number" step="0.01" id="quantite" name="quantite" required><br>

                <label for="unite">Unité:</label>
                <select id="unite" name="unite" required>
                    <option value="grammes">Grammes</option>
                    <option value="kilogrammes">Kilogrammes</option>
                </select><br>

                <input type="submit" value="Ajouter Consommation">
            </form>

        </div>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (!isset($_POST['unite'])) {
                $message = '<p class="error-message">Erreur: Unité non définie.</p>';
            } else {
                $animal_id = $_POST['animal_id'];
                $date = $_POST['date'];
                $type_nourriture = $_POST['type_nourriture'];
                $quantite = $_POST['quantite'];
                $unite = $_POST['unite'];

                $checkStmt = $pdo->prepare("SELECT * FROM `consommation` WHERE `animal_id` = :animal_id AND `date` = :date");
                $checkStmt->execute([':animal_id' => $animal_id, ':date' => $date]);
                $existing = $checkStmt->fetch(PDO::FETCH_ASSOC);

                if ($existing) {
                    $message = '<p class="error-message">Cette consommation existe déjà.</p>';
                } else {

                    $sql = "INSERT INTO `consommation` (`animal_id`, `date`, `type_nourriture`, `quantite`, `unite`) VALUES (:animal_id, :date, :type_nourriture, :quantite, :unite)";
                    $stmt = $pdo->prepare($sql);

                    $stmt->execute([
                        ':animal_id' => $animal_id,
                        ':date' => $date,
                        ':type_nourriture' => $type_nourriture,
                        ':quantite' => $quantite,
                        ':unite' => $unite
                    ]);

                    $message = '<p class="success-message">Consommation ajoutée avec succès!</p>';
                }
            }
        }
        echo $message;

        ?>



</body>

</html>