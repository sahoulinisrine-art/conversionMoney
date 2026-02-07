<?php
session_start();

require "./functions/authentification.php";

$title = "accueil";
$nav = "accueil";

if (!is_connected()) {
    header("Location: login.php");
}

$user = $_SESSION['auth'];

require "header.php";
?>
<center>
    <h2>Accueil</h2
     <p>Bonjour <?= $user['firstname'] ?> <?= $user['lastname'] ?></p>
     <p>Convertissez de devises facilement grâce à notre site utilisant PHP.</p>

    <img src="./images/headercurrency.png" alt="headerCurrency" height="350px" width="940px">

   

</center>

<?php require "footer.php"; ?>