<?php
if (!function_exists('is_connected')) {
    require_once __DIR__ . '/functions/authentification.php';
}
?>
 <!doctype html>
  <html lang="fr">

 

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="PHP conversion project">
      <meta name="author" content="Nisrine & Stefania ">
      <meta name="generator" content="Jekyll v3.8.5">

      <title>
          <?php
            if (isset($title)):
                echo $title;
            else:
                echo "Mon site";
            endif;
            ?>
      </title>


      <link rel="canonical" href="http://localhost<?php echo $_SERVER['SCRIPT_NAME']; ?>">

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Custom CSS -->
      <link rel="stylesheet" href="./style.css">
  </head>
 <body>


 <div class="container">
  <nav class="navbar navbar-light navbar-expand-sm">
    
    <a class="navbar-brand" href="./accueil.php">
        <img src="./images/images.jpg" alt="Logo">
        Conversion Monétaire
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($nav === 'accueil'): ?> active <?php endif ?>">
                <a class="nav-link" href="./accueil.php">Accueil</a>
            </li>
            
            <li class="nav-item <?php if ($nav === 'comparatif'): ?> active <?php endif ?>">
                <a class="nav-link" href="./comparatif.php">Comparatif</a>
            </li>

            <?php if (is_connected()): ?>
                <li class="nav-item <?php if ($nav === 'profil'): ?> active <?php endif ?>">
                    <a class="nav-link" href="./monProfil.php">Mon Profil</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                       href="#" 
                       id="calcDropdown" 
                       role="button" 
                       data-toggle="dropdown" 
                       aria-haspopup="true" 
                       aria-expanded="false">
                        Conversion
                    </a>
                    <div class="dropdown-menu" aria-labelledby="calcDropdown">
                        <a class="dropdown-item" href="./pagesConvertisseur/euroDollars.php">Euro / Dollars</a>
                        <a class="dropdown-item" href="./pagesConvertisseur/euroYen.php">Euro / Yen</a>
                        <a class="dropdown-item" href="./pagesConvertisseur/euroPounds.php">Euro / Pounds</a>
                        <a class="dropdown-item" href="./pagesConvertisseur/euroFrancsRDC.php">Euro / FrancsRDC</a>
                        <a class="dropdown-item" href="./pagesConvertisseur/euroDirham.php">Euro / Dirham</a>
                        <a class="dropdown-item" href="./pagesConvertisseur/euroYuan.php">Euro / Yuan</a>
                    </div>
                </li>
            <?php endif; ?>
        </ul>

        <ul class="navbar-nav">
            <?php if (!is_connected()): ?>
                <li class="nav-item <?php if ($nav === 'login'): ?> active <?php endif ?>">
                    <a class="nav-link" href="./login.php">Login</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
    </div>
</nav>
 </body>