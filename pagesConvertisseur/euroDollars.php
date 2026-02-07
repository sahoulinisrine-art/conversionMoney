<?php
session_start();
$title= "conversion USD";
$nav = "conversion";
require "./functions/functionConvert.php";
require "./header.php";
$euro = $usd = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $usd = euroToUSD($euro);
    } elseif (!empty($_POST['devise'])) {
        $usd = $_POST['devise'];
        $euro = $usd / 1.08;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Conversion Euro ↔ USD</title>
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
    <h1>Conversion Euro ↔ USD</h1>
    <form method="POST">
        <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
        <button type="submit">Convertir € → USD</button>
    </form>

    <form method="POST">
        <input type="number" step="0.01" name="devise" placeholder="Montant en USD" value="<?= $usd ?>">
        <button type="submit">Convertir USD → €</button>
    </form>

    <?php if($euro !== "" || $usd !== ""): ?>
        <div class="result">
            Euro = <?= $euro ?> € | USD = <?= $usd ?>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
