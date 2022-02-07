<?php
    session_start();
?>

<html>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="View/connexion.php">Connexion</a></li>
                <li><a href="View/inscription.php">Inscription</a></li>
                <li><a href="View/profil.php">Profil</a></li>
                <li><a href="View/planning.php">Planning</a></li>
                <li><a href="View/reservation.php">Réservation</a></li>
                <li><a href="View/reservation-form.php">Réserver</a></li>
                <li><a href="View/deconnexion.php">Deconnexion</a></li>
            </ul>
            <?php
                if (!empty($_SESSION)) {
                    echo "Bonjour" . " " . $_SESSION["user"]["login"] . " !";
                }
            ?>
        </nav>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>