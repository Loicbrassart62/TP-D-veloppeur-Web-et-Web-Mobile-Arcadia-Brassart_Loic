<?php

include ("config.php");



if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];


    $stmt = $pdo->prepare('UPDATE consultation SET consultations = consultations + 1 WHERE id = :id');
    $stmt->execute(['id' => $id]);


    switch ($id) {
        case 1:
            header('Location: leLion.php');
            break;
        case 2:
            header('Location: leZebre.php');
            break;
        case 3:
            header('Location: laGirafe.php');
            break;
        case 4:
            header('Location: leRhinoceros.php');
            break;
        case 5:
            header('Location: laLoutre.php');
            break;
        case 6:
            header('Location: alligator.php');
            break;
        case 7:
            header('Location: laTortue.php');
            break;
        case 8:
            header('Location: leHeron.php.');
            break;
        case 9:
            header('Location: leJaguar.php.');
            break;
        case 10:
            header('Location: leToucan.php.');
            break;
        case 11:
            header('Location: leTapir.php.');
            break;
        case 12:
            header('Location: leGorille.php.');
            break;
        default:
            header('Location: index.php');
            break;
    }
    exit();
} else {
    echo 'ID non spécifié.';
}
