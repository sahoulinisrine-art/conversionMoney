<?php
session_start();
require "./functions/authentification.php";

$title = "Login";
$nav = "login";
$erreur = null;

/* Liste des utilisateurs (TES DEUX USERS) */
$users = [
    [
        'firstname' => 'Nisrine',
        'lastname'  => 'Sahouli',
        'login'     => 'niss',
        'password'  => 12345,
        'role'      => 'admin'
    ],
    [
        'firstname' => 'Stefania',
        'lastname'  => 'Italiana',
        'login'     => 'stef',
        'password'  => 12345,
        'role'      => 'user'
    ]
];

/* Déjà connecté */
if (is_connected()) {
    header("Location: accueil.php");
    exit;
}

/* Traitement du login */
if (!empty($_POST['login']) && !empty($_POST['password'])) {

    foreach ($users as $user) {
        if (
            $_POST['login'] === $user['login'] &&
            $_POST['password'] == $user['password']
        ) {
            /* USER CONNECTÉ */
            $_SESSION['auth'] = $user;

            header("Location: accueil.php");
            exit;
        }
    }

    $erreur = "Identifiants incorrects";
}

require "header.php";
?>

<?php if ($erreur): ?>
    <div class="alert alert-danger"><?= $erreur ?></div>
<?php endif; ?>
<center>
<h1>Login</h1>

<form method="POST">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="password" placeholder="Mot de passe">
    <br>
    <button type="submit">Connexion</button>
</form>
</center>
<?php require "footer.php"; ?>

