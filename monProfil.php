<?php
// =============================
// Fichier : profile.php
// =============================
$title = 'Mon Profile';
$nav = "profil";
session_start();
if (!is_connected()) {
    header("Location: login.php");
    exit;
}
include 'header.php';
?>
<style>
    .content {
        margin-left: 250px;
    }
      body{
        background-color:grey;
      }
    .data {
        border: 1.5px solid black;
        padding: 20px;
        margin: 40px;
        width: 300px;
        background-color: lightgrey;
    }
</style>

<h2 class="blog-header text-center" style="color: green; text-decoration: underline;"> Mon Profil </h2>
<div class=content>
    <h3>Bienvenue <?php echo $_SESSION['user']['login']; ?>!!</h3>
    <br>
    <div class="data">
        <h4>Mes données:</h4>
        <p>Nom: <strong><?php echo $_SESSION['user']['lastname']; ?></strong></p>

        <p>Prénom: <strong><?php echo $_SESSION['user']['firstname']; ?></strong></p>

        <p>Pseudo: <strong><?php echo $_SESSION['user']['login']; ?></strong></p>

        <p>Mon code: <strong><?php echo $_SESSION['user']['password']; ?></strong></p>
        <img src="images/chatcute12.jpg" width="120" alt="profile">

    </div>
    <br>
</div>
<?php include 'footer.php'; ?>