<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<div class="container">

    <footer class="py-3 mb-4 text-center">

        <ul class="nav justify-content-center border-bottom pb-4 mb-3">
            <li class="nav-item"><a href="./accueil.php" class="nav-link px-2 text-muted">Accueil</a></li>
            <li class="nav-item"><a href="./comparatif.php" class="nav-link px-2 text-muted">Comparatif</a></li>

            <?php if (!is_connected()): ?>
                <li class="nav-item"><a href="./monProfil.php" class="nav-link px-2 text-muted">Mon Profil</a></li>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="./login.php">Login</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link px-2 text-muted" href="./logout.php">Logout</a>
                </li>
            <?php endif; ?>
        </ul>

        <p class="text-muted">
            <?= date("d/m/Y H:i"); ?>
        </p>

    </footer>
</div>

</body>

</html>