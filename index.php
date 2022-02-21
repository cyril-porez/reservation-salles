<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="librairies/views/css/index.css">
    <link rel="stylesheet" type="text/css" href="librairies/views/css/footer.css">

</head>

<body>
    <header class="main-head">
        <nav>
            <img  src="librairies/Views/images/logo.png" alt="logo" class="logo">
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
    
<<<<<<< HEAD
=======
    <main>
        <div class="container"> 
            <div class ="box">
                <div class="imgBx">
                    <img src
                </div>
            </div>
        </div>
    </main>
>>>>>>> main
    <footer>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">shipping</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">order status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                            <li><a href="#">dress</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>