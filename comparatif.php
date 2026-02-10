<?php
session_start();
$title = "Comparatif";
$nav = "comparatif";
require "./header.php";





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

<div class="comparatif-container">
<h1>Taux de devises par rapport à l'euro</h1>

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

<?php require "footer.php"; ?>