<?php
    session_start();
?>

<html>
<body>
    <header>
        <nav>
            <?php
                if (!empty($_SESSION["user"])) {                    
                   echo' <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="librairies/Views/profil.php">Profil</a></li>
                        <li><a href="librairies/Views/planning.php">Planning</a></li>
                        <li><a href="librairies/Views/reservation-form.php">Réserver</a></li>
                        <li><a href="librairies/Views/deconnexion.php">Deconnexion</a></li>
                    </ul>';
                    echo "Bonjour " . $_SESSION["user"]["login"] . " !";
                }
                else {
                    echo' <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="librairies/Views/connexion.php">Connexion</a></li>
                        <li><a href="librairies/Views/inscription.php">Inscription</a></li>
                        <li><a href="librairies/Views/planning.php">Planning</a></li>
                    </ul>';
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