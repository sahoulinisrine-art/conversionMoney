<?php

// Fonctions de conversion Euro -> Devises

function euroToUSD(float $montant): float {
    $taux = 1.08; // 1 € ≈ 1.08 $
    return $montant * $taux;
}

function euroToJPY(float $montant): float {
    $taux = 162.50; // 1 € ≈ 162.50 ¥
    return $montant * $taux;
}

function euroToGBP(float $montant): float {
    $taux = 0.85; // 1 € ≈ 0.85 £
    return $montant * $taux;
}

function euroToCDF(float $montant): float {
    $taux = 3000; // 1 € ≈ 3000 CDF
    return $montant * $taux;
}

function euroToMAD(float $montant): float {
    $taux = 10.80; // 1 € ≈ 10.80 MAD
    return $montant * $taux;
}

function euroToCNY(float $montant): float {
    $taux = 7.80; // 1 € ≈ 7.80 ¥
    return $montant * $taux;
}

?>