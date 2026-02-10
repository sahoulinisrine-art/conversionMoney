<?php
    session_start();
    $title = "Page d'accueil";
    $nav = "index";
    require "./header.php";
    
?>

<div class="page-hero">
    <h2>Bienvenue</h2>
    <p>Bienvenue sur notre site de conversion de devises.</p>
    <p>Connectez-vous pour acceder à tous nos services.</p>
</div>

<?php require "footer.php"; ?>