<?php
session_start();
$title = "accueil";
$nav = "accueil";
require "./functions/authentification.php";



if (!is_connected()) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['auth'];

require "header.php";
?>

<div class="page-hero">
    <h1>Conversion Monétaire</h1>
    <p>Binvenue <?= $user['firstname'] ?> <?= $user['lastname'] ?></p>
    <br>
    <p style="font-style: italic; font-size: 16px;">« Cette fonction convertit rapidement un montant d’une devise à une autre en utilisant des taux de change à jour pour garantir des résultats précis et immédiats. »</p>
    <img src="./images/headercurrency.png" alt="headerCurrency">
</div>

<?php require "footer.php"; ?>