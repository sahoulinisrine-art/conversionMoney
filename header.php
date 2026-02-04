  <!doctype html>
  <html lang="fr">
  <?php
    require_once "./functions/authentification.php";
    ?>

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


      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <style>
          .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
          }

          body {
              background-color: #f2f2f2;
          }

          .container {
              margin: 40px auto;
              width: 70%;
              background: white;
              padding: 20px;
              border-radius: 10px;
          }

          @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                  font-size: 3.5rem;
              }
          }
      </style>

      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="blog.css" rel="stylesheet">
  </head>

  <div class="container">
      <header class="blog-header py-3 border-bottom text-center">
          <a class="blog-header-logo text-dark" href="#" style="font-size: 2rem; font-weight: bold;">
              MON PHP
          </a>

          <ul class="navbar-nav mr-auto">
              <?php if (!is_connected()): ?>
                  <li class="nav-item <?php if ($nav === "login"): ?> active <?php endif ?>">
                      <a class="nav-link" href="./login.php">Login</a>
                  </li>
              <?php else : ?>
                  <li class="nav-item">
                      <a class="nav-link" href="./logout.php">Logout</a>
                  </li>
              <?php endif; ?>
          </ul>
      </header>

      <nav class="nav d-flex justify-content-center py-2 mb-3">
          <a class="nav-link text-muted <?php if ($nav === 'accueil') echo 'active font-weight-bold text-dark'; ?>"
              href="./accueil.php">Accueil</a>

          <a class="nav-link text-muted <?php if ($nav === 'contact') echo 'active font-weight-bold text-dark'; ?>"
              href="./contact.php">Contact</a>

          <!-- calculatrice -->
          <?php if (is_connected()): ?>
              <a class="nav-link text-muted <?php if ($nav === 'profil') echo 'active font-weight-bold text-dark'; ?>"
                  href="./monProfil.php">Mon Profil</a>
              <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted font-weight-bold"
                      href="#"
                      id="calcDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false">
                      Conversion
                  </a>

                  <div class="dropdown-menu text-center" aria-labelledby="calcDropdown">
                      <a class="dropdown-item" href="./euroDollars.php">Euro / Dollars</a>
                      <a class="dropdown-item" href="./euroYen.php">Euro / Yen</a>
                      <a class="dropdown-item" href="./euroPounds.php">Euro / Pounds</a>
                      <a class="dropdown-item" href="./euroFrancsRDC.php">Euro / FrancsRDC</a>
                      <a class="dropdown-item" href="./euroDirham.php">Euro / Dirham</a>
                      <a class="dropdown-item" href="./euroYuan.php">Euro / Yuan</a>
                  </div>
              </div>
          <?php endif; ?>

          <!-- fin -->


      </nav>
  </div>