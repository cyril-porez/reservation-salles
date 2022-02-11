<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Accueil</a></li>
                <li><a href="connexion.php">Connexion</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="planning.php">Planning</a></li>
                <li><a href="reservation.php">Réservation</a></li>
                <li><a href="reservation-form.php">Réserver</a></li>
                <li><a href="deconnexion.php">Deconnexion</a></li>
            </ul>
            <?php
                if (!empty($_SESSION)) {
                    echo "Bonjour" . " " . $_SESSION["user"]["login"] . " !";
                }
            ?>
        </nav>
    </header>
    <!-- <main>

    </main>
    <footer>

    </footer> -->
</body>
</html>