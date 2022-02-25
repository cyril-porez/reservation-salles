<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="librairies/views/css/index.css">
    <link rel="stylesheet" type="text/css" href="librairies/views/css/footer.css">

</head>

<body>
    <header class="main-head">
        <nav>
            <img src="librairies/Views/images/logo.png" alt="logo" class="logo">
            <?php
            if (!empty($_SESSION["user"])) {
                echo ' <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="librairies/Views/profil.php">Profil</a></li>
                        <li><a href="librairies/Views/planning.php">Planning</a></li>
                        <li><a href="librairies/Views/reservation-form.php">Réserver</a></li>
                        <li><a href="librairies/Views/deconnexion.php">Deconnexion</a></li>
                    </ul>';
                echo "Bonjour " . $_SESSION["user"]["login"] . " !";
            } else {
                echo ' <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="librairies/Views/connexion.php">Connexion</a></li>
                        <li><a href="librairies/Views/inscription.php">Inscription</a></li>
                        <li><a href="librairies/Views/planning.php">Planning</a></li>
                    </ul>';
            }
            ?>
        </nav>
    </header>

    <h1>Bienvenue dans notre site de réservation</h1>

    <div class="carre-img">
        <div class="box">
            <div class="imgBx">
                <img src="librairies/Views/images/image1.png">
            </div>
            <div class="content">
                <div>
                    <h2>Image Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="librairies/Views/images/image2.png">
            </div>
            <div class="content">
                <div>
                    <h2>Image Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="librairies/Views/images/image3.png">
            </div>
            <div class="content">
                <div>
                    <h2>Image Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php
        require_once('librairies/views/footer.php');
        ?>
    </footer>
</body>

</html>