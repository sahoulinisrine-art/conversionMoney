<?php
session_start();
require "../functions/functionConvert.php";
require "..//header.php";
$euro = $mad = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $mad = euroToMAD($euro);
    } elseif (!empty($_POST['devise'])) {
        $mad = $_POST['devise'];
        $euro = $mad / 10.80;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Conversion Euro ↔ MAD</title>

</head>
<body>
<div class="container">
<h1>Conversion Euro ↔ MAD</h1>
<form method="POST">
    <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
    <button type="submit">Convertir € → MAD</button>
</form>

<form method="POST">
    <input type="number" step="0.01" name="devise" placeholder="Montant en MAD" value="<?= $mad ?>">
    <button type="submit">Convertir MAD → €</button>
</form>

<?php if($euro !== "" || $mad !== ""): ?>
<div class="result">
Euro = <?= $euro ?> € | MAD = <?= $mad ?>
</div>
<?php endif; ?>
</div>
</body>
</html>
