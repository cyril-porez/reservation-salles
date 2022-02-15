
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
        <?php
            if (!empty($_SESSION["user"])) {                    
                echo' <ul>
                    <li><a href="../../index.php">Accueil</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="planning.php">Planning</a></li>
                    <li><a href="reservation-form.php">Réserver</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>';
                echo "Bonjour " . $_SESSION["user"]["login"] . " !";
            }
            else {
                echo' <ul>
                    <li><a href="../../index.php">Accueil</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="planning.php">Planning</a></li>
                    <li><a href="reservation-form.php">Réserver</a></li>
                </ul>';
            }
        ?>
        </nav>
    </header>
</body>
</html>