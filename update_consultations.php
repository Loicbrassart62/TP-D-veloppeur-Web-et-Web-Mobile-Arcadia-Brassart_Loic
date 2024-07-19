<?php

include ("config.php");



if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];


    $stmt = $pdo->prepare('UPDATE consultation SET consultations = consultations + 1 WHERE id = :id');
    $stmt->execute(['id' => $id]);


    switch ($id) {
        case 1:
            header('Location: Le-Lion.php');
            break;
        case 2:
            header('Location: Le-Zèbre.php');
            break;
        case 3:
            header('Location: La-Girafe.php');
            break;
        case 4:
            header('Location: Le-Rhinocéros.php');
            break;
        case 5:
            header('Location: La-Loutre.php');
            break;
        case 6:
            header('Location: Alligator.php');
            break;
        case 7:
            header('Location: La-Tortue.php');
            break;
        case 8:
            header('Location: Le-Héron.php.');
            break;
        case 9:
            header('Location: Le-Jaguar.php.');
            break;
        case 10:
            header('Location: Le-Toucan.php.');
            break;
        case 11:
            header('Location: Le-Tapir.php.');
            break;
        case 12:
            header('Location: Le-Gorille.php.');
            break;
        default:
            header('Location: index.php');
            break;
    }
    exit();
} else {
    echo 'ID non spécifié.';
}