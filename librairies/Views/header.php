
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/planning.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/evenement.css">


</head>
<body>
    <header class="main-head">
        <nav>
            <img style=" width:10vh ; border-radius: 12px;" src="images/logo.png" alt="logo" class="logo">
        
        <?php
            if (!empty($_SESSION["user"])) {                    
                echo' <ul>
                    <li><a href="../../index.php">Accueil</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="planning.php">Planning</a></li>
                    <li><a href="reservation-form.php">Réserver</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>';?>
                <p>Bonjour <?= $_SESSION["user"]["login"] ?> !</p><?php
            }
            else {
                echo' <ul>
                    <li><a href="../../index.php">Accueil</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="planning.php">Planning</a></li>
                </ul>';
            }
        ?>
        </nav>
    </header>
</body>
</html>