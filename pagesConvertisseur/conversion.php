<?php
session_start();
$title= "conversion";
$nav = "conversion";
require "../functions/functionConvert.php";
require "../header.php";
; // ton fichier avec les fonctions euroToUSD(), euroToJPY(), etc.

// Sauvegarde des taux en session pour réutilisation
if (!isset($_SESSION['taux'])) {
    $_SESSION['taux'] = [
        'USD' => 1.08,
        'JPY' => 162.50,
        'GBP' => 0.85,
        'CDF' => 3000,
        'MAD' => 10.80,
        'CNY' => 7.80
    ];
}

// Devise choisie via paramètre GET, par défaut USD (ternaire)
$devise = isset($_GET['devise']) ? $_GET['devise'] : 'USD';

// Tableau associatif pour choisir la fonction
$fonctions = [
    'USD' => 'euroToUSD',
    'JPY' => 'euroToJPY',
    'GBP' => 'euroToGBP',
    'CDF' => 'euroToCDF',
    'MAD' => 'euroToMAD',
    'CNY' => 'euroToCNY'
];

// Fonction à utiliser pour Euro -> Devise
$convertEuroFunc = isset($fonctions[$devise]) ? $fonctions[$devise] : 'euroToUSD';

// Variables pour les formulaires
$euro = $montant = "";

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Euro -> Devise
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $montant = $convertEuroFunc($euro); // utilise la fonction existante
    } 
    // Devise -> Euro
    elseif (!empty($_POST['devise'])) {
        $montant = $_POST['devise'];
        $taux = $_SESSION['taux'][$devise]; // récupérer le taux
        $euro = $montant / $taux; // conversion inverse simple
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Conversion Euro ↔ <?= $devise ?></title>
    <style>
        body { font-family: Arial; padding: 30px; background: #f4f4f4; }
        .container { max-width: 400px; margin: auto; padding: 20px; background: #fff; border-radius: 10px; }
        input, button { width: 100%; padding: 10px; margin-bottom: 15px; font-size: 16px; }
        button { background: #2980b9; color: white; border: none; cursor: pointer; }
        button:hover { background: #1f618d; }
        .result { text-align: center; font-size: 18px; color: #27ae60; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Conversion Euro ↔ <?= $devise ?></h1>

        <!-- Formulaire Euro -> Devise -->
        <form method="POST">
            <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
            <button type="submit">Convertir € → <?= $devise ?></button>
        </form>

        <!-- Formulaire Devise -> Euro -->
        <form method="POST">
            <input type="number" step="0.01" name="devise" placeholder="Montant en <?= $devise ?>" value="<?= $montant ?>">
            <button type="submit">Convertir <?= $devise ?> → €</button>
        </form>

        <?php if($euro !== "" || $montant !== ""): ?>
            <div class="result">
                Euro = <?= $euro ?> € | <?= $devise ?> = <?= $montant ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
