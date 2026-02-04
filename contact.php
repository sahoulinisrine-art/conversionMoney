<?php
session_start();
$title = "contact";
$nav = "contact";
require "header.php";

?>

<div style="margin-left: 260px;">
    <h2> Page de contact</h2>
    <p>Bienvenue sur la page de contact de mon site.
        Ce site est une simple démonstration pour montrer les bases du langage PHP.</p>

    <p>Les informations ci-dessous sont purement fictives :</p>
    <ul>
        <li><strong>Téléphone :</strong> +33 1 23 45 67 89</li>
        <li><strong>Email :</strong> contact@example.com</li>
        <li><strong>Adresse :</strong> 123 Rue de l’Exemple, 75001 Paris</li>
    </ul>
</div>
    <?php

    require "footer.php";

    ?>