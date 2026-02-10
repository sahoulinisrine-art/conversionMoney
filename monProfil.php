<?php
session_start();

require "./functions/authentification.php";
require "./functions/functionConvert.php";

$title = 'Mon Profil';
$nav = "profil";



$user = $_SESSION['auth'];

require 'header.php';
?>

<h2 class="blog-header text-center">Mon Profil</h2>

<div class="content">
    <h3><?= $user['firstname'] ?> <?= $user['lastname'] ?></h3>

    <div class="data">
        <h4>Mes données :</h4>

        <p>Nom : <strong><?= $user['lastname']; ?></strong></p>
        <p>Prénom : <strong><?= $user['firstname']; ?></strong></p>
        <p>Pseudo : <strong><?= $user['login']; ?></strong></p>
        <p>Rôle : <?= $user['role'] ?></p>

        <img src="./images/businesswoman-600nw-155754371.webp" width="120" alt="profile">
    </div>
</div>



<?php
$total = isset($_SESSION['conversions']) ? count($_SESSION['conversions']) : 0;
?>



<p style="text-align: center;">Vous avez fait <strong><?php echo $total; ?></strong> conversions monétaires.</p>
<br>

<div class="tableau">
    <h3>Toutes les conversions:</h3>

    <?php if ($total == 0): ?>
        <p style="text-align: center; color: gray;">Aucune conversion effectuée pour le moment.</p>
    <?php else: ?>
        <table border="2" class="table table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type de Conversion</th>
                    <th>Montant Initial</th>
                    <th>Montant Final</th>
                    <th>Taux</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inverse l'array pour montrer les plus récentes en premier
                $conversions = array_reverse($_SESSION['conversions']);
                
                foreach ($conversions as $conv) {
                    echo "<tr>
                        <td>{$conv['date']}</td>
                        <td>{$conv['type']}</td>
                        <td>" . number_format($conv['montant_initial'], 2) . " {$conv['devise_initiale']}</td>
                        <td>" . number_format($conv['montant_final'], 2) . " {$conv['devise_finale']}</td>
                        <td>{$conv['taux']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>


















<?php
require "./footer.php"
?>
