<?php
session_start();

require "./functions/authentification.php";

$title = "accueil";
$nav = "accueil";


$user = $_SESSION['auth'];

require "header.php";
?>
<center>
    <h2>Accueil</h2>

    <p>Bonjour <?= $user['firstname'] ?> <?= $user['lastname'] ?></p>
    <p>Login : <?= $user['login'] ?></p>
    <p>Rôle : <?= $user['role'] ?></p>
</center>

<?php require "footer.php"; ?>