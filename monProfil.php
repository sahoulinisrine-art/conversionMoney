<?php
session_start();

require "./functions/authentification.php";
require "./functions/functionConvert.php";

$title = 'Mon Profil';
$nav = "profil";



$user = $_SESSION['auth'];

require 'header.php';
?>

<h2 class="blog-header text-center">Mon Profil</h2>

<div class="content">
    <h3><?= $user['firstname'] ?> <?= $user['lastname'] ?></h3>

    <div class="data">
        <h4>Mes données :</h4>

        <p>Nom : <strong><?= $user['lastname']; ?></strong></p>
        <p>Prénom : <strong><?= $user['firstname']; ?></strong></p>
        <p>Pseudo : <strong><?= $user['login']; ?></strong></p>
        <p>Rôle : <?= $user['role'] ?></p>

        <img src="./images/businesswoman-600nw-155754371.webp" width="120" alt="profile">
    </div>
</div>


