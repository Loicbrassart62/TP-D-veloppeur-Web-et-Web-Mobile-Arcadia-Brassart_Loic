<?php

$dsn = 'mysql:host=localhost;dbname=arcadia;charset=utf8';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $pdo->query('UPDATE consultation SET consultations = 0');


    header('Location: admin.php');
    exit();
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}