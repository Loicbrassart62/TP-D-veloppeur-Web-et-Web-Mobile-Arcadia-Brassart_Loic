<?php

include ("config.php");

try {

    $stmt = $pdo->query('UPDATE consultation SET consultations = 0');


    header('Location: admin.php');
    exit();
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}