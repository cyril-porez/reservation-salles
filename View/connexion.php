<?php 
session_start();
require_once('../Controller/RegistAuthController.php');
//var_dump($_SESSION["user"]);

if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    $auth = new RegistAuth;
    $auth->connexionUser($_POST["login"], $_POST["password"]);
}

?>


   <header>

        <?php

            require_once('header.php');
        ?>
    
   </header>
    <main id="main_connexion"> 
    
        <form action="" method="POST">

            <h3>Se connecter</h3>
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="Password" name="password">
            <button class="buttonco" type="submit" name="connexion">connexion</button>
        </form>

    </main>


