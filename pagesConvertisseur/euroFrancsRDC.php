<?php
session_start();
require "../functions/functionConvert.php";
require "../header.php";
$euro = $cdf = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $cdf = euroToCDF($euro);
    } elseif (!empty($_POST['devise'])) {
        $cdf = $_POST['devise'];
        $euro = $cdf / 3000;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Conversion Euro ↔ CDF</title>
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
<h1>Conversion Euro ↔ CDF</h1>
<form method="POST">
    <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
    <button type="submit">Convertir € → CDF</button>
</form>

<form method="POST">
    <input type="number" step="0.01" name="devise" placeholder="Montant en CDF" value="<?= $cdf ?>">
    <button type="submit">Convertir CDF → €</button>
</form>

<?php if($euro !== "" || $cdf !== ""): ?>
<div class="result">
Euro = <?= $euro ?> € | CDF = <?= $cdf ?>
</div>
<?php endif; ?>
</div>
</body>
</html>
