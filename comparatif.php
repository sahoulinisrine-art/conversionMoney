<?php
session_start();
$title = "comparatif";
$nav = "comparatif";
require "header.php";

?>

<?php
$devises = [
    [
        "code" => "USD",
        "nom" => "Dollar américain",
        "taux" => 1.08, // 1 € ≈ 1.08 $
        "interet" => "Économie très forte (référence mondiale)",
        "tag" => "fort"
    ],
    [
        "code" => "JPY",
        "nom" => "Yen japonais",
        "taux" => 162.50,
        "interet" => "Grande puissance industrielle",
        "tag" => "fort"
    ],
    [
        "code" => "GBP",
        "nom" => "Livre sterling (Pound)",
        "taux" => 0.85,
        "interet" => "Économie stable",
        "tag" => "stable"
    ],
    [
        "code" => "CDF",
        "nom" => "Franc congolais (RDC)",
        "taux" => 3000,
        "interet" => "Économie en développement (forte volatilité)",
        "tag" => "emergent"
    ],
    [
        "code" => "MAD",
        "nom" => "Dirham marocain",
        "taux" => 10.80,
        "interet" => "Économie émergente et stable",
        "tag" => "emergent"
    ],
    [
        "code" => "CNY",
        "nom" => "Yuan chinois",
        "taux" => 7.80,
        "interet" => "Deuxième puissance économique mondiale",
        "tag" => "fort"
    ],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Taux des devises par rapport à l’euro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #eaeaea;
        }
        th {
            background: #1f2d3d;
            color: #fff;
        }
        tr:hover {
            background: #f0f6ff;
        }
        .badge {
            padding: 5px 10px;
            border-radius: 12px;
            color: white;
            font-size: 12px;
        }
        .fort { background: #27ae60; }
        .stable { background: #2980b9; }
        .emergent { background: #e67e22; }
        .note {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
<div class="my-4" style="max-width: 900px; margin: 0 auto; padding: 20px;">
<h1>Taux de devises par rapport à l’euro</h1>

<table>
    <tr>
        <th>Devise</th>
        <th>Code</th>
        <th>1 € =</th>
        <th>Lecture économique</th>
    </tr>

    <?php foreach ($devises as $devise): ?>
        <tr>
            <td><?= $devise["nom"]; ?></td>
            <td><?= $devise["code"]; ?></td>
            <td><?= $devise["taux"]; ?></td>
            <td>
                <span class="badge <?= $devise["tag"]; ?>">
                    <?= $devise["interet"]; ?>
                </span>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<p class="note">
    Ces taux sont indicatifs pour l’exercice. Les devises des grandes économies (USD, CNY, JPY) sont
    généralement plus stables. Les devises des pays émergents peuvent varier davantage.
</p>
</div>
</body>
</html>

    <?php

    require "footer.php";

    ?>