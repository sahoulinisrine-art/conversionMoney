<?php
session_start();
require "./functions/functionConvert.php";
require "./header.php";
$euro = $yen = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $yen = euroToJPY($euro);
    } elseif (!empty($_POST['devise'])) {
        $yen = $_POST['devise'];
        $euro = $yen / 162.50;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Conversion Euro ↔ JPY</title>
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
<h1>Conversion Euro ↔ JPY</h1>
<form method="POST">
    <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
    <button type="submit">Convertir € → ¥</button>
</form>

<form method="POST">
    <input type="number" step="0.01" name="devise" placeholder="Montant en ¥" value="<?= $yen ?>">
    <button type="submit">Convertir ¥ → €</button>
</form>

<?php if($euro !== "" || $yen !== ""): ?>
<div class="result">
Euro = <?= $euro ?> € | Yen = <?= $yen ?>
</div>
<?php endif; ?>
</div>
</body>
</html>
