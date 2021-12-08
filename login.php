<?php
session_start(); // Session start

if (isset($_POST["username"]) && !isset($_SESSION["username"])) { // Handling login
// Username & password array
$users = [
    "admin" => "lc"
];

// Check & verify
if (isset($users[$_POST["username"]])) {
    if ($users[$_POST["username"]] == $_POST["password"]) {
        $_SESSION["username"] = $_POST["username"];
    }
}

// Failed login flag
if (!isset($_SESSION["username"])) {
    session_start();
    $_SESSION["failedLogin"] = "true";
    header("Location: index.php");} // stuurt gebruiker terug naar website als de inlog incorrect is
}

// Redirect to home.php if logged in
if (isset($_SESSION["username"])) {
    header("Location: main.php"); 
    exit();
}

// Prevents direct access to login.php
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!-- Alex Oversteegen AEITO21SD-B -->