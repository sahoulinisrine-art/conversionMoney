<?php
session_start();
$title = "conversion";
$nav = "conversion";
require '../functions/functionConvert.php';
require_once __DIR__ . '/../header.php';



// Initialisation des taux
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

// Devise choisie
$devise = $_GET['devise'] ?? 'USD';

// Table des fonctions
$fonctions = [
    'USD' => 'euroToUSD',
    'JPY' => 'euroToJPY',
    'GBP' => 'euroToGBP',
    'CDF' => 'euroToCDF',
    'MAD' => 'euroToMAD',
    'CNY' => 'euroToCNY'
];

$convertEuroFunc = $fonctions[$devise] ?? 'euroToUSD';

$euro = $montant = "";

// Traitement
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['euro'])) {
        $euro = floatval($_POST['euro']);
        $montant = $convertEuroFunc($euro);
    } elseif (!empty($_POST['devise'])) {
        $montant = floatval($_POST['devise']);
        $taux = $_SESSION['taux'][$devise];
        $euro = $montant / $taux;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Conversion Euro ↔ <?= $devise ?></title>
</head>

<body>
    <div class="conversion-container">
        <h1>Conversion Euro ↔ <?= $devise ?></h1>

        <form method="POST">
            <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
            <button type="submit">Convertir € → <?= $devise ?></button>
        </form>

        <form method="POST">
            <input type="number" step="0.01" name="devise" placeholder="Montant en <?= $devise ?>" value="<?= $montant ?>">
            <button type="submit">Convertir <?= $devise ?> → €</button>
        </form>

        <?php if ($euro !== "" || $montant !== ""): ?>
            <div class="result">
                Euro = <?= $euro ?> € | <?= $devise ?> = <?= $montant ?>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>