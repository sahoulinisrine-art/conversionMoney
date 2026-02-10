<?php
session_start();
$euro = $cdf = "";
$nav = 'euroFrancsRDC';
require "../functions/functionConvert.php";
require_once __DIR__ . '/../header.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['euro'])) {
        $euro = $_POST['euro'];
        $cdf = euroToCDF($euro);
        
        // Salva la conversione Euro -> Franc Congolais
        $_SESSION['conversions'][] = [
            'type' => 'Euro / Francs RDC',
            'montant_initial' => $euro,
            'devise_initiale' => 'EUR',
            'montant_final' => $cdf,
            'devise_finale' => 'CDF',
            'taux' => 3000,
            'date' => date('d/m/Y H:i:s')
        ];
        
    } elseif (!empty($_POST['devise'])) {
        $cdf = $_POST['devise'];
        $euro = $cdf / 3000;
        
        // Salva la conversione Franc Congolais -> Euro
        $_SESSION['conversions'][] = [
            'type' => 'Francs RDC / Euro',
            'montant_initial' => $cdf,
            'devise_initiale' => 'CDF',
            'montant_final' => $euro,
            'devise_finale' => 'EUR',
            'taux' => 1/3000,
            'date' => date('d/m/Y H:i:s')
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Conversion Euro ↔ CDF</title>

</head>

<body>
    <div class="container-conversion">
        <h1>Conversion Euro ↔ CDF</h1>
        <form method="POST">
            <input type="number" step="0.01" name="euro" placeholder="Montant en €" value="<?= $euro ?>">
            <button type="submit">Convertir € → CDF</button>
        </form>

        <form method="POST">
            <input type="number" step="0.01" name="devise" placeholder="Montant en CDF" value="<?= $cdf ?>">
            <button type="submit">Convertir CDF → €</button>
        </form>

        <?php if ($euro !== "" || $cdf !== ""): ?>
            <div class="result">
                Euro = <?= $euro ?> € | CDF = <?= $cdf ?>
            </div>
        <?php endif; ?>
    </div>
    <style>
        body {
            font-family: Arial;
            padding: 30px;
            background: #f4f4f4;
        }

        .container-conversion {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            margin-top: 50px
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            background: #2980b9;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #1f618d;
        }

        .result {
            text-align: center;
            font-size: 18px;
            color: #27ae60;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>






</body>

</html>