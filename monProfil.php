<?php
// =============================
// Fichier : profile.php
// =============================
session_start();

require "./functions/authentification.php";

$title = 'Mon Profil';
$nav = "profil";

/* Protection de la page */
if (!is_connected()) {
    header("Location: login.php");
    exit;
}

$user = $_SESSION['auth'];

include 'header.php';
?>

<style>
    .content {
        margin-left: 250px;
    }
    body {
        background-color: grey;
    }
    .data {
        border: 1.5px solid black;
        padding: 20px;
        margin: 40px;
        width: 300px;
        background-color: lightgrey;
    }
</style>

<h2 class="blog-header text-center" style="color: green; text-decoration: underline;">
    Mon Profil
</h2>

<div class="content">
    <h3>Bienvenue <?= $user['login']; ?> !!</h3>

    <div class="data">
        <h4>Mes données :</h4>

        <p>Nom : <strong><?= $user['lastname']; ?></strong></p>
        <p>Prénom : <strong><?= $user['firstname']; ?></strong></p>
        <p>Pseudo : <strong><?= $user['login']; ?></strong></p>

       
        <p>Mon code : <strong><?= $user['password']; ?></strong></p>

        <img src="images/chatcute12.jpg" width="120" alt="profile">
    </div>
</div>

<?php include 'footer.php'; ?>
