<?php
session_start();


if (!isset($_SESSION['user_id'])) {

    header("Location: login.php");
    exit();
}


function checkRole($required_role)
{
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $required_role) {

        header("Location: index.php");
        exit();
    }
}
?>