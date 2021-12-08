<?php
    session_start(); // Start sesion

    unset($_SESSION["username"]); // Logout request

    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit();
    }

    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
        exit();
    }
?>
